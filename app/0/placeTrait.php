<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class placeTrait
 *
 * @author abdullah
 */
trait placeTrait {

    function check_owner() {
        if ($this->ownerID == user::current()->userID) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    function check_own_and_type() {
        if (!$this->match_type() || !$this->check_owner()) {

            return FALSE;
        } else {
            return TRUE;
        }
    }

    function check_id_from_param($idx = null) {
        if (isset($idx) and $idx != null) {
            $id = intval(fix_entry($idx));
            if (is_int($id)) {
                //echo $id;
                $this->set_by_key($id);
                //           echo $this->match_type();



                if ($this->check_own_and_type()) {

                    return true;
                } else {

                    return FALSE;
                }
            }
        }
    }

    function match_type() {

        if ($this->placeTypeID == self::type) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    function get_place_by_latlng($kms, $limit) {
        $q = " SELECT `placeID`,`mobile`,`placeLong`,`placeLat`,`placeName`,`placeAddress`,`placeImg`,`placeAreaID`, ( 3959 * acos( cos( radians('" . $this->placeLat . "') ) * cos( radians( placeLat ) ) * cos( radians( placeLong ) - radians('" . $this->placeLong . "') ) + sin( radians('" . $this->placeLat . "') ) * sin( radians( placeLat ) ) ) ) AS distance FROM places where `placeTypeID`='" . self::type . "' HAVING distance < " . $kms . " ORDER BY distance limit " . $limit;
        return sql::result($q);
    }

    public static function distance($lat1, $lon1, $lat2, $lon2, $unit = "K") {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    public static function get_by_user($user = 'x') {
        return sql::result("SELECT `places`.`placeID`,`places`.`placeLong`,`places`.`placeLat`,`places`.`placeName`,`places`.`placeAddress`,`places`.`placeAreaID`,`places`.`status`,`places`.`sponser_status`,`places`.`mobile`,`files`.`placeOnServer` as `image` FROM `places`,`files` WHERE `places`.`placeTypeID`=" . self::type . " and `places`.`status`!='deleted' and `places`.`ownerID`= " . user::current()->userID . " and `files`.`fileID`= `places`.`placeImg` group by `places`.`placeID`")['result'];
    }

    public static function get_by_team($param = null) {
        return sql::result("SELECT * FROM `placesteam` where `placeID`=" . $param . " and `placeTypeID`=" . self::type . " and `ownerID` = " . user::current()->userID);
//        return sql::result("SELECT `usertypesdata`.`usertypesDataID` , `user`.`userID` , `places`.`placeName`,`places`.`mobile` , `user`.`fullName`
//                                 FROM `usertypesdata`
//                                 LEFT JOIN `places` ON `usertypesdata`.`placeID` = `places`.`placeID`
//                                 LEFT JOIN `user` ON `usertypesdata`.`userID` = `user`.`userID` WHERE `places`.`placeTypeID`=" . self::type . " and `places`.`ownerID` = " . user::current()->userID . "");
//       
    }

    public static function get_place_team($place = null, $type = null) {


        $additionalSql = ($type != null) ? " and usertypesdata.typeID =" . $type . " " : null;

        $q = sql::result("SELECT DISTINCT usertypesdata.userID,user.fullName,user.userPhone,files.placeOnServer as image FROM `usertypesdata`,`user`,files where usertypesdata.placeID=" . $place . $additionalSql . " and usertypesdata.userID=user.userID and files.fileID=user.userImg")['result'];
        $newdata = [];
        if (count($q) > 0) {
            foreach ($q as $value) {
                $value['permissions'] = self::user_permission_by_place($place, $value['userID']);

                $newdata[] = $value;
            }
        }
        return $newdata;
    }

    public static function get_place_doctor($place = null) {
        $q = sql::result("SELECT DISTINCT usertypesdata.userID,user.fullName,user.userPhone,files.placeOnServer as image FROM `usertypesdata`,`user`,files where usertypesdata.placeID=" . $place . " and usertypesdata.typeID = 2 and usertypesdata.userID=user.userID and files.fileID=user.userImg")['result'];
        $newdata = [];
        if (count($q) > 0) {
            foreach ($q as $value) {
                $value['permissions'] = self::user_permission_by_place($place, $value['userID']);

                $newdata[] = $value;
            }
        }
        return $newdata;
    }
    
    static function get_labs_data($place) {
     
     return sql::result("SELECT `labs_data`.`labs_dataID` , `labs_data`.`analasysID`, `labs_data`.`status`, `labs_data`.`lab_ID`, `labs_data`.`price` , `analasys`.`name`, `analasys`.`type` FROM `labs_data` , `analasys` WHERE `labs_data`.`analasysID` = `analasys`.`analasysID` AND `labs_data`.`lab_ID` = " . $place . "")['result'];
 }

    public static function get_ambulance_team($place) {
        
        return sql::result("SELECT `usertypesdata`.`userID` , `user`.`userName` FROM `usertypesdata` , `user` WHERE `usertypesdata`.`typeID` = 30 and `usertypesdata`.`placeID` = ". $place ." and `usertypesdata`.`userID` = `user`.`userID`")['result'];
    }
    
    public static function ambulance_by_place($place) {
        return sql::result("SELECT `ambulance`.`ambulanceID`, `ambulance`.`ambulanceMobile`, `ambulance`.`ambulancePlaceID` , `ambulance`.`ambulanceUserID`, `ambulance`.`license`, `ambulance`.`status`,`places`.`placeName`, `user`.`fullName`,`user`.`userName`,`files`.`placeOnServer` as 'placeIMG',(select files.placeOnServer from files where files.fileID=ambulance.ambulanceIMG) as ambulanceimg FROM `ambulance`,`places`,`user`,`files` WHERE `ambulance`.`ambulancePlaceID` = " . $place . " and `places`.`placeID` = " . $place . " and `ambulance`.`ambulanceUserID` = `user`.`userID` and `files`.`fileID` = `places`.`placeImg`")['result'];
    }
    
    public static function delete_ambulance($place) {
        return sql::result_update("DELETE FROM `ambulance` WHERE `ambulanceID` = ".$place);
    }
    
    public static function delete_labs_data($labs_dataID) {
        
        return sql::result_update("DELETE FROM `labs_data` WHERE `labs_data`.`labs_dataID` = ".$labs_dataID."");
    }
    
    
    public static function get_user_types() {
        return sql::result("SELECT * FROM `usertypes` where PlaceType=" . self::type . " and typeStatus=1")['result'];
    }

    public static function get_user_doctor_types() {
        return sql::result("SELECT * FROM `usertypes` where PlaceType=" . self::type . " and typeStatus=1 and typeID=2")['result'];
    }

    static function delete_user_from_place($place, $user) {

        return sql::result_update("delete FROM `usertypesdata` where userID=" . $user . " and placeID=" . $place);
    }

    static function add_user_to_place($place, $user, $permissions) {

        $userTypeData = new usertypesdata();

        $userTypeData->userID = $user;
        $userTypeData->placeID = $place;
        self::delete_user_from_place($place, $user);

        foreach ($permissions as $value) {

            $userTypeData->usertypesDataID = null;

            $userTypeData->typeID = $value;
            $create = $userTypeData->create();
        }
    }

    public static function user_permission_by_place($place, $user) {
        return sql::result("SELECT usertypesdata.typeID ,usertypes.typeName FROM usertypes, `usertypesdata` where usertypesdata.typeID=usertypes.typeID and usertypesdata.userID=" . $user . " and usertypesdata.placeID=" . $place)['result'];
    }

//    public static function doctor_permission_by_place($place, $user) {
//        return sql::result("SELECT usertypesdata.typeID ,usertypes.typeName FROM usertypes, `usertypesdata` where usertypesdata.typeID=26 and usertypesdata.userID=" . $user . " and usertypesdata.placeID=" . $place)['result'];
//    }


    static function get_access_list($access = 'order') {

        $array = [];

        $owned = sql::result("SELECT placeID FROM `places`  where placeTypeID=" . self::type . " and  ownerID=" . user::current()->userID)['result'];
        if (count($owned) > 0) {
            foreach ($owned as $o) {
                $array[] = $o['placeID'];
            }
        }

        switch ($access) {
            case 'order':
                $typeid = self::ordersperm;
                break;

            default:
                break;
        }
        
        $permitted = sql::result("SELECT placeID FROM `usertypesdata` where userID=" . user::current()->userID . " and typeID=" . $typeid)['result'];
        if (count($permitted) > 0) {
            foreach ($permitted as $p) {
                $array[] = $p['placeID'];
            }
        }
        return $array;
    }

    public static function update_place_workingHour($place, $day, $daysStatus, $from, $to) {

        return sql::result_update("UPDATE `workinghour` SET `daysStatus` = " . $daysStatus . " , `workingHourStart` = " . $from . " , `workingHourEnd` = " . $to . " WHERE  `placeID` = " . $place . " and `dayWeekID` = " . $day);
    }

    public static function delete_place_workingHour($place) {

        return sql::result_update("DELETE FROM `workinghour` WHERE `placeID` = " . $place);
    }

    public static function check_place_workingHour_by_place($place) {

        $workingHour = new workinghour();

        $workingHour->placeID = $place;
        $workingHour->read_by_field('placeID');
        if ($workingHour->placeID > 0) {
            return TRUE;
        } else {

            return FALSE;
        }
    }

    public static function delete_insurance_place($place) {

        return sql::result_update("DELETE FROM `insurancecompplace` WHERE `placeID` = " . $place);
    }
    
    public static function get_insurancecompany_by_place($place) {
        return sql::result("SELECT `insurancecompany`.`insuranceCompID` , `insurancecompany`.`insuranceCompName` FROM `insurancecompplace` , `insurancecompany` WHERE `placeID` = ". $place ." and `insurancecompplace`.`insuranceCompID` = `insurancecompany`.`insuranceCompID`")['result'];
    }

    public static function add_place_workinghour($place, $day, $daysStatus, $from, $to) {
        check_ajax();
        if (check_posts($place)) {
            $workingHour = new workinghour();
            $workingHour->placeID = $place;

            if ($daysStatus == 'true') {
                $workingHour->daysStatus = 'on';
            } else {
                $workingHour->daysStatus = 'off';
            }
            $workingHour->dayWeekID = $day;
            $workingHour->workingHourStart = $from;
            $workingHour->workingHourEnd = $to;

            if ($workingHour->create()) {
                $result["status"] = TRUE;
            } else {
                $result["status"] = FALSE;
            }
        } else {
            $result["status"] = FALSE;
        }
        echo json_encode($result);
    }

    public static function working_hour_by_place($place) {

        return sql::result("SELECT `daysStatus` , `dayWeekID` , `workingHourStart` , `workingHourEnd` FROM `workinghour` WHERE `placeID` = " . $place)['result'];
    }

}
