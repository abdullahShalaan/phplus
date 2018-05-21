<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of doctors_api
 *
 * @author abdullah
 */
class doctors_api {
    
    static function spec() {
        
        //$array= (new medicalspecial())->read_multi_filter();
        $list2=sql::result("select medicalSpecialID as id ,medicalSpecialName as name from ".medicalspecial::table);
        echo json_encode($list2);
    }
    static function degree() {
                $list2=sql::result("select doctorScientificDegreeID as id ,doctorScientificDegreeName as name from ".doctorscientificdegree::table);
        echo json_encode($list2);
    }
    
    static function search() {
        global $p;
       
        if (!check_posts(['SearchValues'])){
            echo json_encode(['status'=>FALSE]);
        exit;}
            $request= json_decode($_POST['SearchValues']);
            // print_rr($_POST);
//            switch ($request->searchType) {
//                case 'estshara':
//                        $doctors=sql::result("SELECT usertypesdata.userID as doctorid,user.fullName,files.placeOnServer as image FROM `usertypesdata`,`otherdocdata`,`user`,files where usertypesdata.typeID=26 and user.userID=usertypesdata.userID and otherdocdata.docID=usertypesdata.userID  and files.fileID=user.userImg and (otherdocdata.mainMajor=".$request->specialization." or usertypesdata.userID in(select docID from doctorspecial where medicalSpecialID=".$request->specialization." ) )")['result'];
//                   //     last_query();  
//                    if(count($doctors)>0){
//                    echo json_encode(['status'=>TRUE,'doctors'=>$doctors]);
//                    }else{
//                     echo json_encode(['status'=>FALSE]);   
//                        
//                    }
//                    //print_rr($doctors);
//                    exit;
//                    break;
//
//                default:
//                    break;
//            }
        $clinics=new clinics();
            if($request->searchType=='estshara'){
                
        $clinics->placeLat=30;
        $clinics->placeLong=30;
        $clinicsList=$clinics->get_place_by_latlng(1000, 100);
        
            }else{
        $area=new area($request->Area);
        
        $clinics->placeLat=$area->areaLat;
        $clinics->placeLong=$area->areaLong;
        $clinicsList=$clinics->get_place_by_latlng(2, 1000);
            }
        
        
        if(count($clinicsList['result'])==0){
            
            echo json_encode(['status'=>FALSE]);
            exit;
        }
        $clinicsfulllist=[];
        foreach ($clinicsList['result'] as $cliniconce) {
            $clinicsfulllist[$cliniconce['placeID']]=$cliniconce;
        }
        $clinics_ids= array_column($clinicsList['result'],"placeID");
        $clinics_str= implode(',', $clinics_ids);
        $zyara=($request->searchType=='zyara')? " `otherdocdata`.`availForVisit`='avail' and ":null;
        $estshara=($request->searchType=='estshara')? " `otherdocdata`.`availForCounseling`='avail' and ":null;
      $doctors_tmp=sql::result("SELECT usertypesdata.userID as doctorid,usertypesdata.placeID as clinicID,otherdocdata.availForCounseling,otherdocdata.availForVisit,otherdocdata.priceInClinic,otherdocdata.priceInHome,user.fullName,medicalspecial.medicalSpecialName,files.placeOnServer as image FROM `usertypesdata`,`otherdocdata`,`user`,medicalspecial,files where   otherdocdata.docID=usertypesdata.userID and usertypesdata.placeID in (".$clinics_str.") and usertypesdata.typeID=26 and user.userID=usertypesdata.userID and user.fullName like '%".$request->doctorName."%' and medicalspecial.medicalSpecialID=otherdocdata.mainMajor and files.fileID=user.userImg                     and  ".$zyara. $estshara." (otherdocdata.mainMajor=".$request->specialization." or usertypesdata.userID in(select docID from doctorspecial where medicalSpecialID=".$request->specialization." ) )")['result'];
     //last_query();
      $doctors=[];
          if(count($doctors_tmp)==0){
            
            echo json_encode(['status'=>FALSE]);
            exit;
        }
      //print_rr($doctors_tmp);
      foreach ($doctors_tmp as $tmp_doctor) {
      //    print_rr($tmp_doctor);
        //  print_rr($clinicsfulllist[$tmp_doctor['placeID']]);
          $tmp_doctor['clinicName']=$clinicsfulllist[$tmp_doctor['clinicID']]['placeName'];
              $tmp_doctor['clinicAddress']=$clinicsfulllist[$tmp_doctor['clinicID']]['placeAddress'];
          $tmp_doctor['distance']=$clinicsfulllist[$tmp_doctor['clinicID']]['distance'];
          $medicalspecial=sql::result("SELECT medicalspecial.medicalSpecialName FROM doctorspecial,medicalspecial where medicalspecial.medicalSpecialID=doctorspecial.medicalSpecialID and doctorspecial.docID=".$tmp_doctor['doctorid'])['result'];
          $tmp_doctor['otherSpecials']= (count($medicalspecial)>0)?array_column($medicalspecial,"medicalSpecialName"):[];
          $diasessss=sql::result("SELECT diseases.diseasesName FROM diseases,disesasthreatdoc where disesasthreatdoc.diseaseID=diseases.diseasesID and disesasthreatdoc.docID=".$tmp_doctor['doctorid'])['result'];
            $tmp_doctor['diases']=(count($diasessss)>0)? array_column($diasessss,"diseasesName"):[];
                  //(new doctorspecial())->read_multi_filter(['docID'=>$tmp_doctor['doctorid']]);
          $doctors[]=$tmp_doctor;
      }      
  //    print_rr($doctors);
//  last_query();
        echo json_encode(['status'=>TRUE,'doctos'=>$doctors]);
    }
    
    static function pre(){
        global $p;
        echo json_encode([
        'spec'=> sql::result("select medicalSpecialID as id ,medicalSpecialName as name from ".medicalspecial::table)['result']
       ,'degrees'=>sql::result("select doctorScientificDegreeID as id ,doctorScientificDegreeName as name from ".doctorscientificdegree::table)['result']
       ,'areas'=>sql::result("select areaID as id,areaName as name from area where mainArea='0'")['result']     
       ,'insurance'=>sql::result("SELECT `insuranceCompID` as id,`insuranceCompName` as name,IF(`insuranceCompID`=(select user.insuranceComp FROM user where user.userID=2),TRUE,FALSE) as registered FROM `insurancecompany`")['result']
            ]
                
                )  ;
        

        
    }
    static function doctorBookData(){
        global $p;
      $daytime=24*60*60;
        $today=intval(weekofdays::currentDay()->dayID);
       // $today=6;
        //echo $todayNumber;
        $days=workinghour::byPlace($p['clinicID'], $today);
            $daysresult=[];
//            for ($index = 0; $index < count($days); $index++) {
//            //echo date("j/n/Y",time()+($index*$daytime))."<br>";               
//            }
        
            if($days){
            foreach ($days as $day) {
                
                $plus= (intval($day['dayID'])-$today);
                $plus2=($plus>=0)?$plus:$plus+7;
                //echo $day['dayID']." - ".$today."  + 1   = ". $plus2.'<br>';
                $day['date']=date("j/n/Y",time()+($plus2*$daytime));  
                $daysresult[]=$day;
            }}
         //   print_rr($daysresult);
        if(!$days)
echo json_encode(['status'=>false]); 
        else
echo json_encode(['status'=>TRUE,'result'=>$daysresult]);
//        
//        for ($index = $todayNumber; $index <$todayNumber+7; $index++) {
//            if($index>7)
//                $current=$index-7;
//            else
//                $current=$index;
//            
//            echo $current."<br>";
//            
//        }
//        exit;
//        print_rr(weekofdays::currentDay());
//        
//        echo date("l" )."<br>";
//        echo date("l", time()+$day)."<br>";
//        echo date("l", time()+($day*2))."<br>";
//        echo date("l", time()+($day*3))."<br>";
//        echo date("l", time()+($day*4))."<br>";
//        echo date("l", time()+($day*5))."<br>";
//        echo date("l", time()+($day*6));

    }
    //put your code here
}
