<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class run{
    
    
    public static function control() {
        global $p, $route,$langvars,$langv,$current_route_method;
        $x=($_SERVER['SERVER_NAME']=='app.lomixa.com')?$_SERVER['REQUEST_URI']:$_SERVER['PATH_INFO'];
        
        $page=trim(@$x, '/');
        $sp=  preg_split("/\//", $page);
        if($sp[0]=='' ||$sp[0]==null)
            header("location:".SITE_URL);
       $paramaters=$sp;
              array_shift($paramaters);
       array_shift($paramaters);
                routes::check_by_routeurl($sp[0]);
            //    print_rr($route);
//Start class data
//                //                $class = new ReflectionClass('routes');
//$methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);
//                print_rr($methods);
//                print_rr(get_declared_classes());
//                print_rr(get_class_methods('user'));
                // end class data
               
                language::load();
     // print_rr($langv);
                
        if (class_exists($route->routeClass)) {
            $class=$route->routeClass;
                      foreach ($_POST as $key => $value) {
                          $p[$key]=  secure_entry($value);
                      }
          $do=new $class; 
                   if(count($sp)>1){
                  if(method_exists($class,@$sp[1])){
//                     print_rr($sp);
            //echo "founded";
//                      if(count($sp)>2){
            $p1=$sp[1];
            $current_route_method=$p1;
         
             user::auth();

                      $do->$p1($paramaters);
                      
                      
//                      } else {
//                          $do->$sp[1]();
//                      }
            // print_rr($sp);
        } else {
            self::error();    
        }   

          }
          else{
      if($route->routeMainMethod!=NULL){
              $main_method=$route->routeMainMethod;
               user::auth();
              $do->$main_method($paramaters);
$current_route_method=$main_method;
          
          }
          }
          
          
          
          exit;
  
          
          
          
        }  else {
            
        self::error();    
        }
          
        
          // print_rr($sp);
    }
    public static function go() {
        self::sec();
        $page=  fix_entry(@$_SERVER['PATH_INFO']);
        if($page==NULL){
            
            disp("home");
            exit;
            
        }
        
$page=trim($_SERVER['PATH_INFO'], '/');
$d=data::is_exist($page);
if ($d) {
    echo $d;
}elseif ($page=='search') {
            echo "search page";
        }else{
    $loc=SITE_URL."search/?q=".$page;
    //print_rr($_SERVER);
    header("location:".$loc);
}

exit;
//$page="xabodxx".$page;
//$page=  preg_replace("/xabodxx\//", "", $page);
$info=sql::select(sql::table_fields("data"), array("encodedLink"=>$encoded), "data");
if($info['num']>0){
print_r($info['result']);    
    
}else{
    
    echo "error";
    exit;
    
}
    }
    public static function error($error='') {
        echo"bad error in ".$error;
        exit;
    }
    public static function sec() {
                if (preg_match("/.php/", $_SERVER['REQUEST_URI'])) {
            
            header("location:".SITE_URL);
            exit;
        }
    }
    
}