<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order_api
 *
 * @author abod
 */
class order_api {
    //put your code here
    
    
    static function add() {
        global $p;
        $file=HOMEDIR.'json/'. time().'.json';
        file_put_contents($file, $_POST['url']);
        $p['time']= time();
        $orderObj= json_decode($_POST['url']);
     
        $orderdetails= json_decode($orderObj->ORDER_JSON);
           
        $userid=$orderdetails->Location->USER_ID;
        $lat=$orderdetails->Location->LATITUDE;
        $lng=$orderdetails->Location->LONGITUDE;
        $products=$orderdetails->products->products;
        $image=$orderdetails->ImageEncode->images;
        $otherimages= json_decode($orderdetails->MultiImages);
        $phone=$orderObj->orderUserPhone;
        $addressOnMap=$orderObj->ADDRESS;
        $address=$orderObj->orderUserAddress;
        $buildingNumber=$orderObj->orderUserBuilderNumber;
        $flatNumber=$orderObj->orderUserFlatNumber;
        $floor=$orderObj->orderUserFloorNumber;
        $name=$orderObj->orderUserName;
        $order=new orders();
        $order->owneruserID=$userid;
        $order->address= json_encode(['address'=>$address,'flat'=>$flatNumber,'building'=>$buildingNumber,'floor'=>$floor,'mapAdress'=>$addressOnMap]);
        $order->createdTime=time();
        $order->name=$name;
        $order->ordreStatus='created';
                $order->userLat=$lat;
        $order->userlLong=$lng;
        $order->phone=$phone;
        switch ($orderdetails->orderType) {
            case "lab":
        $order->placeType= Labs::type;
                $labs=new Labs();
                $labs->placeLat=$lat;
                $labs->placeLong=$lng;
                $labsList=$labs->get_place_by_latlng(500, 100)['result'];
                $labsListIDS= array_column($labsList, "placeID");
                $requestedProductsList=$orderdetails->products->products;
                $requestedProductsListIDS= array_column($requestedProductsList,"id");
                $pricesAndAvaliablelist=sql::result("SELECT `labs_data`.`analasysID`,`labs_data`.`lab_ID`,`labs_data`.`price`,`analasys`.`name` FROM `labs_data`,`analasys` WHERE `labs_data`.`analasysID` in (".implode(",", $requestedProductsListIDS).") and `labs_data`.lab_ID in (".implode(",", $labsListIDS).") and `labs_data`.status='active' and `labs_data`.`analasysID`=`analasys`.`analasysID`")['result'];
                //echo implode(",", $requestedProductsListIDS)."<br>";
                //echo implode(",", $labsListIDS);
                $theresultarray=[];
                if(count($labsList)>0){
                foreach ($labsList as $singlelab) {
                    $tempListArray=[];
                    if(count($pricesAndAvaliablelist)>0){
                    foreach ($pricesAndAvaliablelist as $templistrow) {
                        if($templistrow['lab_ID']==$singlelab['placeID']){
                            $tempListArray[]=$templistrow;
                        }
                    }
                    }
                    //print_rr($tempListArray);
                    if(count($tempListArray)>0){
                    $singlelab['pricelist']=$tempListArray;
                        $theresultarray[]=$singlelab;
                    }
                }
                }
                if(count($theresultarray)>0){
                    echo json_encode(['status'=>TRUE,'type'=>'lab','count'=> count($theresultarray),'result'=>$theresultarray]);
                    
                }else{
                    echo json_encode(['status'=>FALSE]);
                }
               exit;
               
                break;

            default:
                break;
        }
        $order->placeType=5;

        $pharmacy=new pharmacies();
        $pharmacy->placeLat=$lat;
        $pharmacy->placeLong=$lng;
        $pharmacies=$pharmacy->get_place_by_latlng(20, 1)['result'][0];
        $order->placeID=$pharmacies['placeID'];
        $pharmacy->placeID=$order->placeID;
        $pharmacy->read_row();
        $file=new files($pharmacies['placeImg']);
        $pharmacies['image']=$file->placeOnServer;
        unset($pharmacies['placeImg'],$pharmacies['placeAreaID']);
        
        //$pharmacy->get_access_list();
$order->totalprice= array_sum(array_column($products, "pharmproPrice"));
//print_rr($products);
//exit;
    $order->create();
//retrive the pharmacy data
$pharmacy_order_products=new ordrespharmacydata();
$pharmacy_order_products->ordreID=$order->orderID;


foreach ($products as $prod) {
    $pharmacy_order_products->OrdersPharmacyDataID=0;
    $pharmacy_order_products->poductID=$prod->pharmProID;
    $pharmacy_order_products->quantity=($prod->pharmProQuantity==0 || $prod->pharmProQuantity=='0')?1:$prod->pharmProQuantity;
    $pharmacy_order_products->create();
//    print_rr($pharmacy_order_products);
//    exit;
}
//print_rr($otherimages);
//add the single image
$imagex=[];
if(strlen($image)>10)
$imagex[]=files::add_order_file($order->orderID, $image);
//add the multi images
if(count($otherimages)>0)
foreach ($otherimages as $oi) {
 
    
   $imagex[]= files::add_order_file($order->orderID, array_values((array)$oi)[0]);
}

//$pharmacy_order_products->
$placeUsers=pharmacies::get_place_team($order->placeID, pharmacies::ordersperm);
$notify=new notifiaction();
$notify->orderID=$order->orderID;
$notify->details="لديك طلب دواء في ".$address;
$notify->notificationTime= time();
$notify->notifiName="طلب لصيدليه ".$pharmacies['placeName'];
$notify->userID=$pharmacy->ownerID;
$notify->fullDetails= json_encode([
    "ordertype"=>'drugs',
    "orderdata"=>$order,
    "images"=>$imagex,
    "products"=>$products
    
    ]);
$notify->create();
//last_query();
foreach ($placeUsers as $placeUser){
    $notify->notifiID=0;
    $notify->userID=$placeUser['userID'];
    $notify->create();
    
}


$pharmacies['orderID']=$order->orderID;
$pharmacies['status']=TRUE;
$pharmacies['type']='pharmacy';
//print_rr($imagex);
echo json_encode($pharmacies);

    }
    
    static function emergency() {
$request= json_decode($_POST['request']);
switch ($request->orderType) {
    case "consulting":
$doctor=sql::result("SELECT otherdocdata.docID,user.fullName,`files`.`placeOnServer` as `image` FROM `otherdocdata`,`user`,`files` where user.userID=otherdocdata.docID and   user.userImg=files.fileID and otherdocdata.availForCounseling='avail' and(otherdocdata.mainMajor=".$request->specialization." or otherdocdata.docID in (select doctorspecial.docID from doctorspecial where doctorspecial.docID=otherdocdata.docID and doctorspecial.medicalSpecialID=".$request->specialization.") )order by user.user_last_login DESC limit 1")['result'][0];
$order=new orders();
$order->owneruserID=$request->userID;
$order->placeType= clinics::type;
$order->note=$request->notes;
$order->createdTime= time();
//$order->placeuserID=$doctor['docID'];
$order->placeuserID=$doctor['docID'];
$order->subOrderType=2;
$order->create();
$ownerUser=new user($order->owneruserID);

$json=json_encode([
    "ordertype"=>'quickEstshara',
    "orderdata"=>$order,
    "userinfo"=>$ownerUser,
    "notes"=>$request->notes
    ,"doctor"=>$doctor
    ]);
//print_rr($json);
notifiaction::send_order_notfication($order->placeuserID, "استشاره مستعجله", "لديك استشاره مستعجله من  ".$ownerUser->fullName, $order->orderID, $json);
notifiaction::send_order_notfication("1", "استشاره مستعجله", "لديك استشاره مستعجله من  ".$ownerUser->fullName, $order->orderID, $json);
notifiaction::send_order_notfication("2", "استشاره مستعجله", "لديك استشاره مستعجله من  ".$ownerUser->fullName, $order->orderID, $json);
//notifiaction::send_order_notfication(1, "استشاره مستعجله", "لديك استشاره مستعجله من  ".$ownerUser->fullName, $order->orderID, $json);
echo json_encode(["status"=>true,"type"=>'doctor-estshara',"order"=>$order,"doctor"=>$doctor]);

break;

    default:
        break;
}
//print_rr($request);
        //echo json_encode(["status"=>true,"request"=>$_POST]);
        
    }
    
}
