<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class pharmacies
 *
 * @author abdullah
 */
class pharmacies extends places {

    use placeTrait;

    const status = ['created' => 'primary', 'usercanceled' => 'danger', 'placecanceled' => 'danger', 'inprogress' => 'info', 'delivered' => 'success', 'uncomplete' => 'danger', 'rejected' => 'danger'];
    const type = 5;
    const ordersperm = 15;
    const editperm = 14;
    const reportperm = 16;
    const deliveryperm = 17;

    //put your code here
    function __construct($param = null) {
        $this->placeTypeID = self::type;

        if ($param != null) {
            $this->placeID = $param;
            $this->read_row();
        }
    }

    function view($param = []) {
        if (count($param) > 1) {
            if (!$this->check_id_from_param($param[0])) {

                header('location:/');
                exit;
            }
        }
        //
//        print_rr($this->read_multi_filter());
        //$file = new files();
        // assign("file", $file->read_multi_filter([]));
        // print_rr(self::get_by_user());
        assign("pharm", self::get_by_user());
        // assign("pharm", $this->read_multi_filter());

        disp('pharmacies/view');
    }

    function add_action() {

        check_ajax();
        if (check_posts(['name', 'address', 'lat', 'long'])) {
            $pharmacy = new pharmacies();
            $pharmacy->placeName = $_POST['name'];
            $pharmacy->placeLat = $_POST['lat'];
            $pharmacy->placeLong = $_POST['long'];
            $pharmacy->placeAddress = $_POST['address'];
            $pharmacy->ownerID = user::current()->userID;
            $pharmacy->create();
            echo json_encode(['status' => TRUE, 'placeID' => $pharmacy->placeID]);
            exit;
        } else {
            echo json_encode(['status' => FALSE]);
            exit;
        }
    }

    // Start Edit Method 

    public function edit($param = []) {

//        print_r($_POST);
//        print_rr($_FILES);
//        exit;
        check_ajax();
        if (check_posts(['placeID'])) {

            $pharmacy = new pharmacies(intval($_POST["placeID"]));
            $pharmacy->placeLat = $_POST['placeLat'];
            $pharmacy->placeLong = $_POST['placeLong'];

            foreach ($_POST as $key => $value) {

                $pharmacy->$key = $value;
            }

            if (count($_FILES) > 0 and $_FILES["pharmimage"]["error"] == 0) {
                $file = files::new_file("pharmimage", $pharmacy->ownerID);

                $pharmacy->placeImg = $file->fileID;
            }


//echo $file->placeOnServer;
//exit;
//print_rr($pharmacy);
//            print_rr($_POST);
            if ($pharmacy->update()) {
                $result["status"] = TRUE;
            } else {
                $result["status"] = "Errorrrrrrrrrrrrrrr2";
            }
        } else {
            $result["status"] = "Errorrrrrrrrrrrrrrr";
        }
        echo json_encode($result);
    }

    // Start Delete Method 

    public function Delete_Pharm($input = []) {
        $id = $input[0];
        $pharmacy = new pharmacies(intval($id));

        $pharmacy->status = sql::result("UPDATE `places` SET `status` = 'deleted' WHERE `places`.`placeID` = " . $id . "");


//        print_rr($_SESSION['last_query']);

        $pharmacy->update();
    }

    // End Delete Method
    // Start Delete Method 

    public function change_pharm_status($input = []) {


        $mode = $_POST['mode'];
        $id = $_POST['id'];
//        print_r($_POST);
        $this->set_by_key($id);
        if ($mode == 'true') { //mode is true when button is enabled 
            $this->status = 'active';
        } else {
            $this->status = 'not_active';
        }
        $this->update();

        // End Delete Method
    }

    public function change_pharm_sponser_status($input = []) {


        $mode = $_POST['mode'];
        $id = $_POST['id'];
//        print_r($_POST)
        $this->set_by_key($id);
        if ($mode == 'true') { //mode is true when button is enabled 
            $this->sponser_status = 'active_s';
        } else {
            $this->sponser_status = 'no_active';
        }
        $this->update();

        // End Delete Method
    }

    public function team($param = []) {


        if (count($param) < 1) {
            exit;
        }

        if (!$this->check_id_from_param($param[0])) {
            header('location:/');
            exit;
        }
        assign('pharmacy', (array) $this);
        // print_rr($q['result']);
//        print_rr($_SESSION['last_query']);


        assign("pharm", self::get_by_user());
//        print_rr(self::get_by_team()['result']);
//        print_rr(self::get_user_types());
        assign('usertypes', self::get_user_types());

//        print_rr( self::get_place_team($param[0]));
        assign('team', self::get_place_team($param[0]));
        disp('pharmacies/pharmTeam_view');
    }

    public function reports($param = []) {

        disp('pharmacies/pharmReport_view');
    }

    public function orders($param = []) {
        assign('status_style', self::status);
        assign("pharm", self::get_by_user());

//        $tim = new test();
//        $date = $tim->time();
//         print_rr(self::get_access_list());
        $places = implode(self::get_access_list(), ',');

        // echo user::current()->userID;
        $orderslistr = sql::result("SELECT orders.`orderID`, orders.`placeID`,places.placeName,orders.`createdTime`, orders.`deliveyTime`, orders.`owneruserID`, orders.`placeuserID`,orders.`userlLong`,"
                        . " orders.`userLat`, orders.`name`, orders.`phone`, orders.`comment`, orders.`ordreStatus`, orders.`rate`, orders.`totalprice`, orders.`address`, orders.`note`, orders.`createdTime`,`files`.`placeOnServer` as 'image' "
                        . " FROM `orders`,`places`,files "
                        . " WHERE   `orders`.`placeID` in (" . $places . ") and orders.placeID=places.placeID and `files`.`fileID` = `places`.`placeImg` order by `orderID` DESC limit 99")['result'];

        $orderlist = [];
        foreach ($orderslistr as $order) {
            
            $q = sql::result("SELECT `ordrespharmacydata`.`OrdersPharmacyDataID` , `ordrespharmacydata`.`quantity` ,`ordrespharmacydata`. `poductID`,`pharmproducts`.`pharmProName` ,`pharmproducts`.`pharmProID` , `pharmproducts`.`pharmproPrice`  FROM `ordrespharmacydata`,`pharmproducts` WHERE ordrespharmacydata.poductID=pharmproducts.pharmProID and ordreID=" . $order['orderID'])['result'];
            $order['products'] = $q;
            $order['createdTime'] = date("h:i A", $order['createdTime']);
            $orderlist[] = $order;

//            assign('time2', $date);
//        assign('order', $orderlist);
        }

//       $date =  date("h:i:sa",$orderlist[0]['createdTime']);

//        print_rr($orderlist);
// echo last_query();
//       $q = sql::result("SELECT*
//FROM orders
//INNER JOIN places ON places.placeID = orders.placeID
//INNER JOIN ordrespharmacydata ON ordrespharmacydata.ordreID = orders.orderID");
//       //print_rr($q);
//        print_rr($orderslist);
//        $orderquery = sql::result("SELECT orders.`orderID` FROM `orders`,`places` WHERE   `orders`.`placeID` in (" . $places . ") and orders.placeID=places.placeID");\
//print_rr(array_column($orderlist, 'pharmProName'));
// last_query();
//        print_rr($orderquery['result'][0]['orderID']);
//        echo last_query();
//        print_rr($q);

        assign('order', $orderlist);
//        assign('time2', $date);





        disp('pharmacies/pharmOrders_view');
        
    }

    public function check_user_by_mobile($param = null) {

        check_ajax();
        if (check_posts(['userPhone'])) {

            if (user::check_user_exist_by_mobile($_POST['userPhone'])) {

                $this->add_user_to_team();
                echo "user Exsist";
                exit;
            } else {

                $user = new user();
                $user->userPhone = $_POST['userPhone'];
                $user->gender = 0;
                $user->userJoin = time();
                $user->create();
                $user->send_activation_to_mobile();

                $pharmacy = new pharmacies();
                $pharmacy->add_user_to_team();
                echo "user Added";
                exit;
            }
        }
    }

    public function add_user_to_team($param = null) {


        check_ajax();

        if (check_posts(['userPhone', 'placeID'])) {
            $q = sql::result("SELECT userID FROM user WHERE userPhone = " . $_POST['userPhone'] . "");

            $types_data = json_decode($_POST['types']);
            self::add_user_to_place($_POST['placeID'], $q['result'][0]['userID'], $types_data);
        }
    }

    public function delete_user_from_team() {
        //  print_rr($this->check_id_from_param(fix_entry($_POST['placeID'])));
        if ($this->check_id_from_param(fix_entry($_POST['placeID']))) {

            self::delete_user_from_place(fix_entry($_POST['placeID']), fix_entry($_POST['userID']));
        }
    }

    public function pharm_user_permission_edit($param = []) {
//        print_r($_POST);
        check_ajax();
        if ($this->check_id_from_param(fix_entry($_POST['placeID']))) {
            $types_data = json_decode($_POST['types']);
            self::delete_user_from_place(fix_entry($_POST['placeID']), fix_entry($_POST['userID']));
            self::add_user_to_place($_POST['placeID'], fix_entry($_POST['userID']), $types_data);
        }
    }
    
    public function chat($param = []) {
        
        disp('pharmacies/pharmChat_view');
    }
    
    public function pharmChat_view($param = []){
        
        assign('status_style', self::status);
        assign("pharm", self::get_by_user());

//        $tim = new test();
//        $date = $tim->time();
//         print_rr(self::get_access_list());
        $places = implode(self::get_access_list(), ',');

        // echo user::current()->userID;
        $orderslistr = sql::result("SELECT orders.`orderID`, orders.`placeID`,places.placeName,orders.`createdTime`, orders.`deliveyTime`, orders.`owneruserID`, orders.`placeuserID`,orders.`userlLong`,"
                        . " orders.`userLat`, orders.`name`, orders.`phone`, orders.`comment`, orders.`ordreStatus`, orders.`rate`, orders.`totalprice`, orders.`address`, orders.`note`, orders.`createdTime`,`files`.`placeOnServer` as 'image' "
                        . " FROM `orders`,`places`,files "
                        . " WHERE   `orders`.`placeID` in (" . $places . ") and orders.placeID=places.placeID and `files`.`fileID` = `places`.`placeImg` order by `orderID` DESC limit 99")['result'];

        $orderlist = [];
        foreach ($orderslistr as $order) {
            
            $q = sql::result("SELECT `ordrespharmacydata`.`OrdersPharmacyDataID` , `ordrespharmacydata`.`quantity` ,`ordrespharmacydata`. `poductID`,`pharmproducts`.`pharmProName` ,`pharmproducts`.`pharmProID` , `pharmproducts`.`pharmproPrice`  FROM `ordrespharmacydata`,`pharmproducts` WHERE ordrespharmacydata.poductID=pharmproducts.pharmProID and ordreID=" . $order['orderID'])['result'];
            $order['products'] = $q;
            $order['createdTime'] = date("h:i A", $order['createdTime']);
            $orderlist[] = $order;

//            assign('time2', $date);
//        assign('order', $orderlist);
        }

//       $date =  date("h:i:sa",$orderlist[0]['createdTime']);

//        print_rr($orderlist);
        $data = json_encode($orderlist);
//        echo $data;
// echo last_query();
//       $q = sql::result("SELECT*
//FROM orders
//INNER JOIN places ON places.placeID = orders.placeID
//INNER JOIN ordrespharmacydata ON ordrespharmacydata.ordreID = orders.orderID");
//       //print_rr($q);
//        print_rr($orderslist);
//        $orderquery = sql::result("SELECT orders.`orderID` FROM `orders`,`places` WHERE   `orders`.`placeID` in (" . $places . ") and orders.placeID=places.placeID");\
//print_rr(array_column($orderlist, 'pharmProName'));
// last_query();
//        print_rr($orderquery['result'][0]['orderID']);
//        echo last_query();
//        print_rr($q);

        assign('order', $orderlist);
        
        disp('main/chatBoxModal');
    }

}
