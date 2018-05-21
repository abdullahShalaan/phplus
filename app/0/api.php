<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class api{
    
    
    public static function route() {
        global $username,$password;

            
        $x=($_SERVER['SERVER_NAME']=='test010.serv2000.com')?$_SERVER['REQUEST_URI']:$_SERVER['PATH_INFO'];
  $page=trim(@$x, '/');
        $sp=  preg_split("/\//", $page);
//print_rr($sp);
if ($_SERVER['SERVER_NAME']=='test010.serv2000.com') array_shift($sp);

//chmod(HOMEDIR."/json/$sp[0]/", 0777);
//       
//chmod(HOMEDIR."/json/$sp[0]/$sp[1]/", 0777);
    
               if(!(@$_SESSION['username']==$username and @$_SESSION['password']==$password) ){
    if($sp[0]!='auth' ){
    header("location:".SITE_URL."auth/login");
    exit;
    }
}

        $class=''.$sp[0];
        if(class_exists($class)){
                  if(method_exists($class,@$sp[1])){
                      foreach ($_POST as $key => $value) {
                          $p[$key]=  fix_entry($value);
                      }
                $x=$sp[1];
               $class::$x();
               
           }else{
               $class::main();

               
           }
        }else{
            
          header("location:".SITE_URL."clients");
            
        }
 
}

public static function is_api() {
    if(isset($_POST['apiv']) and $_POST['apiv'] == 'v1')
                return true;
    else return FALSE;
}
}
