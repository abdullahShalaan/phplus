<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of analasys_api
 *
 * @author abdullah
 */
class analasys_api {
    //put your code here
    
    static function autocomplete(){
        global $p;
        if(!check_posts(['name'])){
            echo json_encode([]);
            exit;
        }
            
        echo json_encode(sql::result("SELECT analasysID as id,name FROM `analasys` where status='active' and name LIKE '%".$p['name']."%'")['result']);
    }
}
