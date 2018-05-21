<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insurance_api
 *
 * @author abdullah
 */
class insurance_api {
    static function get() {
        global $p;
        $insuranceCompanyList=sql::result("SELECT `insuranceCompID` as id,`insuranceCompName` as name,IF(`insuranceCompID`=(select user.insuranceComp FROM user where user.userID=".$p['userid']."),TRUE,FALSE) as registered FROM `insurancecompany`");
        echo json_encode($insuranceCompanyList);
    }
    //put your code here
}
