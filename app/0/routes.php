<?php

class routes {

    use datatrait;

    CONST key = "routeID";
    CONST table = "routes";

    public $routeID,$auth, $routeCategoryID, $routeName, $routeUrl, $routeOrder, $routeClass, $routeTable, $routeMainMethod, $devID, $tKey;

// Start Add New Route Category

    public function addNewRoutes() {
        global $smarty;
//  print_r($_SERVER);
//        print_rr($_POST);
        if ($_POST) {
            $routes = new routes();

            $routes->routeCategoryID = $_POST['routeCategoryID'];
            $routes->routeName = $_POST['routeName'];
            $routes->routeUrl = $_POST['routeUrl'];
            $routes->routeOrder = $_POST['routeOrder'];
            $routes->routeClass = $_POST['routeClass'];
            $routes->routeTable = $_POST['routeTable'];
            $routes->routeMainMethod = $_POST['routeMainMethod'];
            $routes->devID = $_POST['devID'];
            $routes->tKey = $_POST['TKey'];

            if ($routes->routeCategoryID == '')
                unset($routes->routeCategoryID);
            if ($routes->devID == '')
                unset($routes->devID);
            $createProccess = $routes->create();

            //echo $createProccess[1];
            echo $routes->routeID;
            // $ret['id']=$area->areaID;
            assign('route', ['x' => (array) $routes]);

//            disp('area-edit-form');
            exit;
        }

        //disp('routes/routes-form');
    }

    // End Add New Route Category
    // Start Select Method

    public function Select($param = []) {
        global $smarty;
        
        if ($_POST) {

            $routes = new routes(intval($_POST['routeID']));

            foreach ($_POST as $key => $value) {

                $routes->$key = $value;
            }

            if ($routes->devID == '')
                unset($routes->devID);
            // print_rr($category);
            $routes->update();
        }

        $cat = new routecategory();
        $x = new routes();
        $c = $x->read_multi_filter([]);
        
        foreach ($c as $routevalue) {
           // if($routevalue['routeID']==0)
            //    continue;
           // print_rr($routevalue);
         $permission_query = sql::result("SELECT targetID FROM `routepermission` where routeID= ".$routevalue['routeID']."")['result'];
         if(count($permission_query)>0){
             $permissions= array_column($permission_query, "targetID");
             $routevalue['perms']=json_encode($permissions); 
        
        
        }else{
                         $routevalue['perms']=json_encode([]); 

        }
        $routevalue['xxx']='aaaaaa';
        $routesarray[]=$routevalue;
        }
// print_rr($routesarray);
     //   assign("route", $routesarray);
        assign("routex", $routesarray);
        
        $query = sql::result("SELECT typeID,typeName FROM `usertypes` where PlaceType=0 and typeStatus=1");
//        print_rr($c);
       
         assign('permission', $query['result']);
        assign('RouteCategories', $cat->read_multi_filter([]));
        

        disp('routes/routes-form');
        //disp('main/test');
        
    }

    // End Select Method
    // Start Search 

    public function Search($param = null) {

        global $smarty;

        if (isset($_POST["query"])) {

            $query = (sql::result("SELECT * FROM `routes` WHERE `routeName` LIKE '%" . $_POST['query'] . "%'"));
        } else {
            $query = sql::result("SELECT * FROM `routes` ORDER BY `routeID`");
        }
        $result = $query['result'];


//        print_rr($result);
        if (count($query['result']) > 0) {

            //print_rr($query);
            assign('route', $result);
            // print_rr($result);
            $routes = new routes();
            $c = $routes->read_multi_filter([]);

            $cat = new routecategory();
            assign('RouteCategories', $cat->read_multi_filter([]));
//            assign('RouteMainCategory', $c);
            echo $smarty->fetch('style/lomixa/routes/routes-edit-form.tpl');
        } else {

            echo 'Category Not Found';
        }
    }

    // End Search 
    // Start Delete Method 

    public function Delete_routes($input = []) {

        $id = $input[0];
        $routes = new routes(intval($id));

        $routes->Delete();
    }

    // End Delete Method 

    public static function check_by_routeurl($class) {
        global $route;
        $route = new self();
        $route->routeUrl = $class;
        $route->read_by_field('routeUrl');
        //  print_rr($route);
    }
    private function x(){
        
    }
    public static function assign_cats() {
$userRoutes=sql::result(" SELECT * FROM `routes` WHERE routeID in (SELECT DISTINCT routeID FROM `routepermission`,`usertypesdata` WHERE targetID in(select typeID FROM `usertypesdata` WHERE userID=".user::current()->userID." and usertypesdata.placeID=0) or targetID=-1)")['result'];
//print_rr(user::current());
                $cat = new routecategory;
     //   assign('RouteCategories', $cat->read_multi_filter([]));

        //user::current()->userID
        //print_rr($userRoutes);
        //assign('route', $userRoutes);
        
        $category = $cat->read_multi_filter([],['routeCategoryID','routeCategoryName']);
//        
////        print_rr($category);
////        print_rr($routes);
////
        $cats=[];
      
        foreach ($category as  $catt){
            $temp_cat=[];
            $temp_array=[];
            if(count($userRoutes)>0)
            foreach ($userRoutes as  $rout){
                if($rout['routeCategoryID']==$catt['routeCategoryID']){
                $temp_array[]=$rout;   
                
                
                }
    }
                    $catt['routes']=$temp_array;
                    $catt['routes_count']=count($temp_array);
                    if($catt['routes_count']>0)
                    $cats[]=$catt;
        }
     //   print_rr(user::current());
     /// //  
      //  print_rr($cats);
        
        assign('cats', $cats);
    }
    
    public function editpermission($param=[]) {
        
        if(isset($_POST)){
            $routeID=$_POST['roueID'];
            $permission=json_decode($_POST['permission']);
            $delete_permission=sql::result_update("DELETE FROM routepermission
            WHERE routeID=".$routeID."");
            
           for($i=0; $i<count($permission); $i++){
               
            sql::result("INSERT INTO  routepermission (routeID, targetID)
        VALUES ('".$routeID."','".$permission[$i]."')");
            
            

              
           }
        //   last_query();
           
          
         
            
            
        }
        
        
    
        
        
    }
    
    
    static function getUserAccessRoutes($userid) {
     
        return array_column(sql::result("SELECT DISTINCT routeID FROM `routepermission` WHERE targetID in(select typeID FROM `usertypesdata` WHERE userID=".$userid." and usertypesdata.placeID=0) or targetID=-1 " )['result'],"routeID");
    }
    
    
}
