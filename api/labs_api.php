<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of labs_api
 *
 * @author abdullah
 */
class labs_api {
    //put your code here
    static function order() {
        global $p;
        if(check_posts(['userid','lat','lng','orderdata'])){
            $x=new Labs();
            $x->placeLat=$p['lat'];
                    $x->placeLong=$p['lng'];
            $labs=$x->get_place_by_latlng(20, 1)['result'][0];
            $lab=new Labs($labs['placeID']);
            
            
        }
    }
}
