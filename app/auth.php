<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth
 *
 * @author abdullah
 */
class auth {
    //put your code here
    static function login() {
        //print_rr($_SESSION);
        global $p,$username,$password;
        $error=FALSE;
        if (@$_POST['action']=='login') {
            
            if($_POST['username']==$username and $_POST['password']==$password){
                
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                header("location:".SITE_URL);
                exit;
            }else{
                
                $error=TRUE;
            }
        }
      
        
        assign("error", $error);
        disp("login");
    }
    static function logout(){
        
        session_destroy();
        header("location:".SITE_URL);
        exit;
    }
}
