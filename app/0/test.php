<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author shalaan
 */
class test {

    function excute($p = []) {
        $cat = new routecategory;
        assign('RouteCategories', $cat->read_multi_filter([]));

        $route = new routes();
        assign('route', $route->read_multi_filter([]));

        $category = $cat->read_multi_filter([], ['routeCategoryID', 'routeCategoryName']);
        $routes = $route->read_multi_filter([]);
//        
////        print_rr($category);
////        print_rr($routes);
////
        $cats = [];

        foreach ($category as $catt) {
            $temp_cat = [];
            $temp_array = [];
            foreach ($routes as $rout) {
                if ($rout['routeCategoryID'] == $catt['routeCategoryID']) {
                    $temp_array[] = $rout;
                }
            }
            $catt['routes'] = $temp_array;
            $catt['routes_count'] = count($temp_array);
            $cats[] = $catt;
        }

        // echo '<pre>' . print_rr($cats) . '</pre>';
        //echo '<pre>' . print_rr($routCat) . '</pre>';
        if (user::checkSession()) {


            lomixatemplate('main/test');
        } else {
            header("location:/login");
        }
    }

    function dwa($param = []) {
        $x = sql::result('select `id`,`price` from `dwa` where done=0');
        // echo  $x['nums'];
        foreach ($x['result'] as $value) {
            $p1 = preg_replace("/^ /", null, $value['price']);
            $p1 = str_replace(" ", null, $p1);
            $p1 = preg_replace("/,/", null, $p1);
            $p1 = substr($p1, 1);
            //$p1= preg_replace("/ /",null, $value['price']);

            $p1 = intval($p1);

//        sql::result('update `dwa` set `done`=1 and `price2`='.$p1.' where id=\''.$value['id']."'");
//}
//        echo "<input type=text value=$p1>";
//        exit;
            sql::result('update `dwa` set `done`=1 , `price2`=' . $p1 . ' where id=' . $value['id']);
        }
        //  echo $_SESSION['last_query'];
    }

    function date($param = []) {
        echo strtotime("1992-04-01"), "\n";
        //  echo date("F j, Y, g:i a",702079200); 
        // echo date('l', 702079200);
    }

    function md5($param = []) {
        echo md5($param[0]);
    }

    function sha1($param = []) {
        echo sha1($param[0]);
    }

    function filex($param = []) {
        $filesh = sql::result("select * from files where placeOnServer like 'http%' limit 1000");
        foreach ($filesh['result'] as $value) {
            files::from_url($value['placeOnServer'], $value['fileID']);
        }
        exit;
//        $file=new files(16329);
    }

    function updatePass($param = []) {
        //if(!is_numeric($param[0]))exit;
        $u = new user($param[0]);
        $u->updatePassword($param[1]);
    }

    function view_users($param = []) {
        print_rr(sql::result('select * from user where `userImg>0'));
    }

    //put your code here

    function json($param = []) {
        echo json_encode((new pharmacies)->get_by_user());

//                        $file=HOMEDIR.'9398.json';
//
//        $json= file_get_contents($file);
//        print_rr(json_decode($json));
    }

    function time($param = []) {
       return date("h:i:sa",'1329921084');
//        $datetimeStr = '9:30 AM';
//        $datetime = strtotime($datetimeStr);
//        $dateTimeFromDB = '1511681400';
//        $datetimeStr = date('h:i A', $dateTimeFromDB);
        

//        echo $datetime;
    }

    function lang_var_insert($param = null) {

        $q = sql::result("select tKey from languagevariables A Where Not exists (select lang_tKeyID from lang_tkey B Where A.tKey = B.lang_tKeyID)");

        print_rr($q['result']);
    }

    function ser($param=[]) {
        echo serialize($param[0]);
    }
    
}
