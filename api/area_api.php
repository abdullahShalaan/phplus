<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of area_api
 *
 * @author abdullah
 */
class area_api {
    //put your code here
    
    static function get() {
        global $p;
   $areaid= intval($p['id']);
   echo json_encode(sql::result("select areaID as id,areaName as name from area where mainArea='".$areaid."'"));
    }
}
