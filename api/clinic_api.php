<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clinic_api
 *
 * @author abdullah
 */
class clinic_api {
    
    public static function check(){
        global $p;
        
        
        
     $ph=new pharma_products_view(3);
     $ph->placeOnServer='asas';
     $ph->update();
     echo last_query();
     //echo json_encode($ph);
        
    }
    //put your code here
}
