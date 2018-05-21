<?php

class user_old  {

    use datatrait;

    CONST key = "userID";
    CONST table = "user";

    public $userID, $userName, $fullName, $userPassword, $userEmail, $userAddress, $userPhone, $gender,
            $userBirth, $userImg, $userStatus, $userJoin, $userOut, $userTypeID, $insuranceComp,
            $userJob, $areaID, $activation, $googleID, $facebook, $userLong, $userLat, $user_last_login, $facebook_id, $points, $tKey;

    // Start Add New User

    public function updatePassword($pass) {

        $this->userPassword = self::hash_password($this->userID, $pass);
        $this->update();
//        user::check_User_Pass('hema', '123456');
//        print_rr($user);
//        $pass = $this->stringToAsterisks("jhs54s5sx1cfscs151_bdjsbdsjh@! St");
//        echo $pass;
    }

    public function addNewUser($x = []) {
        global $smarty;
//  print_r($_SERVER);
//        print_rr($_POST);
        if (count($_POST) > 1) {
            $user = new user();

            $user->userName = $_POST['userName'];
            $user->userPassword = self::hash_password($_POST['userName'], $_POST['userPassword']);
            $user->userEmail = $_POST['userEmail'];
            $user->userAddress = $_POST['userAddress'];
            $user->userPhone = $_POST['userPhone'];
            $user->gender = $_POST['gender'];
            $user->userBirth = $_POST['userBirth'];
            $user->userImg = $_POST['userImg'];
            $user->userStatus = $_POST['userStatus'];
            $user->userJoin = $_POST['userJoin'];
            $user->user_last_login = $_POST['user_last_login'];
            $user->userOut = $_POST['userOut'];
            $user->userTypeID = $_POST['userTypeID'];
            $user->insuranceComp = $_POST['insuranceComp'];
            $user->userJob = $_POST['userJob'];
            $user->areaID = $_POST['areaID'];
            $user->activation = $_POST['activation'];
            $user->googleID = $_POST['googleID'];
            $user->facebook = $_POST['facebook'];
            $user->facebook_id = $_POST['facebook_id'];
            $user->userLong = $_POST['userLong'];
            $user->userLat = $_POST['userLat'];
            $user->tkey = $_POST['tKey'];


            if ($user->userImg == '')
                unset($user->userImg);
            if ($user->userTypeID == '')
                unset($user->userTypeID);
            if ($user->areaID == '')
                unset($user->areaID);
            $createProccess = $user->create();
            $user->userPassword = self::hash_password($_POST['userName'], $_POST['userPassword']);
            $user->update();
//            echo $createProccess[1];

            echo $user->userID;
            // $ret['id']=$area->areaID;
            assign('user', ['x' => (array) $user]);

//            disp('area-edit-form');
            exit;
        }

        disp('routes/user-form');
    }

    // End Add New User
    // Start Select Method

    public function Select($param = []) {



        if ($_POST) {

            $user = new user(intval($_POST['userID']));

            foreach ($_POST as $key => $value) {

                $user->$key = $value;
            }

            if ($user->userImg == '')
                unset($user->userImg);
            if ($user->userTypeID == '')
                unset($user->userTypeID);
            if ($user->areaID == '')
                unset($user->areaID);
//             print_rr($user);
            $user->update();
        }

//        $cat = new routecategory();
        $x = new user();
        $c = $x->read_multi_filter([]);
//        print_rr($c);

        assign("user", $c);
//        assign('RouteCategories', $cat->read_multi_filter([]));
//        print_rr($c);
//        print_rr($user);
        

        $pass = array();
        foreach ($c as $key => $value) {

            $pass[] = $this->stringToAsterisks($value['userPassword']);
        }
//        print_rr($pass);

        disp('routes/user-form');
    }

    // End Select Method
    // Start Search 

    public function Search($param = null) {

        global $smarty;

        if (isset($_POST["query"])) {

            $query = (sql::result("SELECT * FROM `user` WHERE `userName` LIKE '%" . $_POST['query'] . "%'"));
        } else {
            $query = sql::result("SELECT * FROM `user` ORDER BY `userID`");
        }

        $result = $query['result'];
//        print_rr($result);
        if (count($result) > 0) {

//            print_rr($query);
            assign('user', $result);
//             print_rr($result);
//            assign('user', $user->read_multi_filter([]));
            echo $smarty->fetch('style/lomixa/routes/user-form-edit.tpl');
        } else {

            echo 'USer Not Found';
        }
    }

    // End Search 
    // Start Delete Method 

    public function Delete_user($input = []) {

        $id = $input[0];
        $users = new user(intval($id));

        $users->Delete();
    }

    // End Delete Method
    // Start Login Action Method 
    public function login_action($param = []) {


        switch ($param['type']) {

            case 'facebook':
                $this->get_by_facebook_id();
                break;
            case 'google':

                $this->get_by_google_id();
                break;
            case 'internal':
                $status = $this->check_User_Pass($param['user'], $param['pass']);
                if ($status) {

                    $this->regsession_from_object();
                }
            default:


                break;
        }
    }

    // End Login Action Method
    // Start Get FacebookId Method

    function get_by_facebook_id() {
        $this->read_by_field('facebook_id');
    }

    // End Get FacebookId Method
    // Start Get GoogleID Method
    function get_by_google_id() {
        $this->read_by_field('googleID');
    }

    // End Get GoogleID Method
    // Start Registry Session Method
    public static function regSession($id, $username, $pass, $userphone) {
        global $user;
        $_SESSION['uid'] = $id;
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $pass;
        $_SESSION['userphone'] = $userphone;
        $user = new user($id);

        $user->user_last_login = time();
        $user->update();
    }

    // End Registry Session Method
    // Start Registry Session From Object

    function regsession_from_object() {
        self::regSession($this->userID, $this->userName, $this->userPassword, $this->userPhone);
    }

    // End Registry Session From Object
    // Start Check Session Method
    public static function auth() {
        global $route, $user, $current_route_method;
        //print_rr($route);
        if ($route->auth == 1) {
            
        } elseif (self::checkSession()) {

//        echo $current_route_method; print_rr($route);
//        exit;
            //print_rr($user);
            if ($user->userStatus == 0 and $current_route_method != 'activation') {

                header('location:/user/activation');
            } else {
                if ($current_route_method == 'activation' and $user->userStatus > 0) {

                    header('location:/dashboard');
                }
            }

            //print_rr($user);
        } else {

//        echo $route->auth;
//        echo 'please login';
//        exit;
            //print_rr($route);
            header('location:/login');
        }
    }

    public static function checkSession() {

        global $user;
//user::regSession('1', 'hema', 'hemass');


        if (isset($_SESSION['uid']) and isset($_SESSION['userphone']) and isset($_SESSION['pass'])) {
            $uid = $_SESSION['uid'];
            $userphone = $_SESSION['userphone'];
            $pass = $_SESSION['pass'];


            //  $users = new user();
            $u = $user->read_multi_filter(['userID' => $uid, 'userPhone' => $userphone, 'userPassword' => $pass]);
            if (count($u) == 1) {
                // print_rr($u);
                $user->userID = $uid;
                $user->read_row();
                $file = new files($user->userImg);
                $user->image = $file->placeOnServer;
                notifiaction::assign();

                assign('current_user', (array) $user);

                return TRUE;
            } else {

                return FALSE;
            }

            //  $_SESSION['user'] = $users;
        } else {

            return FALSE;
        }
    }

    // End Check Session Method
    // Start Encript Password Method

    public static function hash_password($uid, $entry) {

        //$uid_array=
        $entry = $entry . md5($uid);
        $entry = md5($entry);
        $entry = "f" . $entry . "x";
        $entry = md5("z" . $entry . "ssa");
        $entry = md5("ad" . $entry . "safsa");
        $entry = md5("w" . $entry . "x");
        $entry = md5("a" . $entry . "r");
        return $entry;
    }

    // End Encript Password Method
    // Start Change Password To Asterik 

    public function stringToAsterisks($password) {

        return str_repeat("*", strlen($password));
    }

    // End Change Password To Asterik
    //Start Change Last Login 
    public function set_user_last_login() {
        $this->user_last_login = time();
        $this->update();
//        $query = sql::result("UPDATE `user` SET `user_last_login` = ".time()." WHERE `userID` ='$this->userID' ");
    }

    // End Change Last login 
    // Start check User And Pass By Object

    function check_object_user_pass() {
        return self::check_User_Pass($this->userID, $this->userPassword);
    }

    // End check User And Pass By Object
    // Start Check User And Pass 

    public static function check_User_Pass($uid, $userPassword) {
        global $user;
        //$user = new user();
//        $userName = $user->userName;
//        $userPassword = $user->userPassword;
//        $u = $user->read_multi_filter(['userName' => $userName]);
        //$user->userName = $_POST['userName'];
        //$user->userPassword = $_POST['userPassword'];
//        $u = $user->read_multi_filter();
//        print_rr($u);
//        if (isset($_POST["userName"]) && isset($_POST["userPassword"])) {
//
//                $q="SELECT * FROM `user` WHERE `userName` = '".$userName."' and userPassword = '".$userPassword."'";
//            $query = (sql::result($q));
//            echo '<pre>
//            '.$q;
//            print_rr($query);
        $password = self::hash_password($uid, $userPassword);
//echo $password;
        $u = $user->read_multi_filter(['userID' => $uid, 'userPassword' => $password]);
// print_rr($u);
//            $this->userName = $u[0]['userName'];
//                $this->read_row();
        if (count($u) == 1) {

            $user->set_by_id($u[0]['userID']);

            return TRUE;
        } else {

            return FALSE;
        }

//        }
    }

    // End Check User And Pass 
    // Start Get User By UserName Method

    public function read_by_username() {

        $this->read_by_field('userName');
    }

    // End Get User By UserName Method
    // Start Get The Data To The Object By ID

    function set_by_id($param) {
        $this->userID = $param;
        $this->read_row();
    }

    function login($param = []) {
        global $langv;

        if (isset($_POST['username'])) {
            $user = fix_entry($_POST['username']);
            $user_exist = sql::result("select * from `user` where `userName`='" . $user . "' or `userEmail`='" . $user . "' or `userPhone`='" . $user . "' ");

            if (isset($user_exist['result'][0]['userID'])) {
                $user_password_check = self::hash_password($user_exist['result'][0]['userID'], $_POST['password']);
                if ($user_password_check == $user_exist['result'][0]['userPassword']) {
                    //     $this->userID=$user_exist['result'][0]['userID'];

                    $this->regSession($user_exist['result'][0]['userID'], $user_exist['result'][0]['userName'], $user_password_check, $user_exist['result'][0]['userPhone']);
                    echo 'success';



// print_r($_SESSION);
                } else {
                    echo $langv['error_in_password'];
                }
            } else {
                //print_rr($langvars);
                echo $langv['error_in_username'];

//            echo 'user not found';
            }
            // print_rr($user_exist);

            exit;
        }
        // print_rr($_SERVER);
        disp('user/login');
        exit;
    }

    function loginaction($param = []) {

        // End Get The Data To The Object By ID 
    }

//    function UserRegister($username, $emailid, $password, $phone) {
////        $password = self::hash_password($username, $password);
//        $query = sql::result("INSERT INTO user(userName, userPassword, userEmail) values('" . $username . "','" . $password . "','" . $emailid . "','" . $phone . "')");
////        return $query;
//
//        print_rr($query);
//    }

    function register($param = []) {

        global $langv;

        if ($_POST) {
//            print_rr($_POST);

            $user = new user();


            $user->userPassword = $_POST['userPassword'];

            $user->userPhone = $_POST['userPhone'];

//            $userphone = strlen($user->userPhone);
            $userpass = strlen($user->userPassword);


            $phoneNumber = $user->userPhone;

//            $user = fix_entry($_POST['user_phone']);
            $user_phone_exist = sql::result("select * from `user` where `userPhone`='" . $user->userPhone . "' ");
            //print_rr($user_phone_exist);
            if (isset($user_phone_exist['result'][0]['userID'])) {


                if (isset($_POST['apiv']) and $_POST['apiv'] == 'v1') {
                    $json = json_encode(['status' => FALSE, 'error' => 'phone_exist']);
                    echo $json;
                    exit;
                }



                echo $langv['userExist'];
//                $user_password_check = self::hash_password($user_phone_exist['result'][0]['userID'], $_POST['user_Password']);
//                if ($user_password_check == $user_phone_exist['result'][0]['userPassword']) {
//                    //     $this->userID=$user_exist['result'][0]['userID'];
//
//                    echo $langv['userExist'];
//
//// print_r($_SESSION);
//                } else {
////                    $query = sql::result("INSERT INTO user(userPassword, userPhone) values('" . $user->userPassword . "','" . $user->userPhone . "')");
//
//                    echo $langv['registerSuccess'];
//                }
            } else {


//                if ($userphone < 11 and $userpass < 6) {
//                    echo $langv['registerFailed'];
//                }
//                if (!empty($phoneNumber)) { // phone number is not empty
//                    if (preg_match('/^\d{10}$/', $phoneNumber)) { // phone number is valid
//                        $phoneNumber = '0' . $phoneNumber;
//
//                        // your other code here
//                    } else { // phone number is not valid
//                        echo 'Phone number invalid !';
//                    }
//                }
                if (empty($phoneNumber)) {
                    echo $langv['registerFailed'];
                } else if (!preg_match('/^\d{11}$/', $phoneNumber)) { // phone number is valid
                    $phoneNumber = '0' . $phoneNumber;

                    echo $langv['registerFailed'];
                } else if ($userpass < 6) {
                    echo $langv['registerFailed'];
                } else {

                    $user->gender = 0;
                    $user->userJoin = time();
                    $user->tkey = 0;
                    $user->create();
                    //  echo $_SESSION['last_query'];
//                    $query = sql::result("INSERT INTO user(userPassword, userPhone) values('" . $user->userPassword . "','" . $user->userPhone . "')");
                    $user->userPassword = self::hash_password($user->userID, $user->userPassword);
                    $user->send_activation_to_mobile();
                    if (api::is_api()) {

                        return $user;
                    }
                    $user->regsession_from_object();
                    echo 'done';
                }
            }
            exit;
        }

        disp('user/register');
        exit;
    }

    function create_activation() {
        $this->activation = rand(1, 99) . rand(0, 9) . rand(0, 9) . rand(0, 9);
    }

    function send_activation_to_mobile($type = 'new') {
        if ($type == 'new') {
            $this->create_activation();
            $this->update();
        }
    }

    function Resend_activation_code($param = []) {

        $this->send_activation_to_mobile('old');

        echo 'old';
    }

    function activation($param = []) {

        global $langv, $user;
        if (check_posts(['resend'])) {

            $this->Resend_activation_code();

            exit;
        }
        if ($_POST) {
//            print_rr($_POST);
            //$user = new user();

            $user->activation = $_POST['activation'];
            if ($_POST['activation'] == $user->activation and $user->activation != null and $user->activation != '') {
                $user->activation = null;
                $user->userStatus = 1;
                $user->update();
                echo $langv['Matched'];
            } else {
                echo $langv['invailedCode'];
            }
            exit;
        }
        disp('user/activation-form');
        exit;
    }

    function user_profile($param = []) {
        global $user;

//        print_rr($_SESSION);
        $userID = $_SESSION['uid'];
        if ($_POST) {

            $user = new user(intval($_SESSION['uid']));

            //  echo '<pre>'; print_r($area);



            foreach ($_POST as $key => $value) {
                $user->$key = $value;
            }
//              print_r($_POST);
//            print_rr($_FILES);
//            exit;
            $timestamp = strtotime($_POST['userBirth']);
            echo $timestamp;

            $target_dir = "files/photos/";
            $target_file = $target_dir . basename($_FILES["userImg"]["name"]);
            if (move_uploaded_file($_FILES["userImg"]["tmp_name"], $target_file)) {
//                    echo "The file " . basename($_FILES["userImg"]["name"]) . " has been uploaded.";
                $pictureName = "files/photos/" . basename($_FILES["userImg"]["name"]);
                $file = new files();

                $file->userId = $userID;
                $file->fileName = $_FILES["userImg"]["name"];
                $file->placeOnServer = $target_file;

                $createProccess = $file->create();
                //  echo $file->fileID;
                $user->userImg = $file->fileID;
            }
            $user->userBirth = $timestamp;


            $user->update();

//                foreach ($_FILES['userImg']['tmp_name'] as $tmp_name) {
//                    if (!empty($tmp_name)) {
//                    
//                        $target_dir = "files/photos/";
//                        $image = $target_dir . basename($_FILES["userImg"]["name"]);
//                        $path_info = pathinfo($image);
//                        if ($path_info['extension'] == 'jpg' || $path_info['extension'] == 'jpeg' || $path_info['extension'] == 'png' || $path_info['extension'] == 'gif') {
//                            if ($_FILES["image"]["size"] <= $maxFileSize) {
//                                $image_d = getimagesize($image);
//                                if (($image_d[0] >= $minWidth) && ($image_d[1] >= $minHeight)) {
//                                    $errors[] = "valid image";
//                                } else {
//                                    $errors[] = "invalid dimension";
//                                }
//                            } else {
//                                $errors[] = "invalid file size";
//                            }
//                        } else {
//                            $errors[] = "format not supported";
//                        }
//                    } else {
//                        $errors[] = 'Please select at least one image.';
//                    }
//                }



            exit;
        }

        disp('user/userProfile-form');
    }

    function logout($x = []) {
        session_destroy();
        header("location:/login");
    }

    function user_intro($param = []) {

        lomixatemplate('user/welcome-intro');
    }

    public static function current() {
        global $user;
        return $user;
    }

    public static function check_user_exist_by_mobile($mobile) {

        global $user;

        $user->userPhone = $mobile;
        $user->read_by_field('userPhone');
        if ($user->userID > 0) {
            return true;
        } else {

            return FALSE;
        }
    }

}
