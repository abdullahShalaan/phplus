<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pharmacy_api
 *
 * @author shalaan
 */
class pharmacy_api {

    //put your code here

    public static function search() {
        global $p;
        if (check_posts(['lat', 'lng'])) {
            $pharmacies = new pharmacies();
            $pharmacies->placeLat = $p['lat'];
            $pharmacies->placeLong = $p['lng'];
            $list = $pharmacies->get_place_by_latlng($p['distance'], 10);
            $r = [];

            foreach ($list['result'] as $place) {
                $f = new files($place['placeImg']);
                $place['placeImg'] = $f->placeOnServer;
                $r[] = $place;
            }
            $result['status'] = TRUE;
            $result['count'] = $list['nums'];
            $result['list'] = $r;
        } else {

            $result['status'] = FALSE;
            $result['error'] = 'invalid lat and lng';
        }

//        echo json_encode($p);
//        exit;
        if (@$p['post'] == 'post')
            $result['post'] = $p;
        echo json_encode($result);
    }

    public static function products_autocomplete($keyname = 'result') {
        global $p;

        $result = [];
        if (check_posts(['query'])) {
            $length = strlen($p['query']);
            if ($length <= 2)
                exit;
            if ($length >= 3 and $length < 8)
                $limit = 20;
            if ($length >= 8)
                $limit = 60;
            if ($length >= 3)
                $resultx = sql::result("select `pharmProID`,`pharmProID` as id,`pharmProName` as text,`pharmProName`,`pharmProName_en`,`pharmproPrice`,`placeOnServer` from `pharma_products_view` where `pharmProName` like '%" . $p['query'] . "%' or `pharmProName_en` like '%" . $p['query'] . "%'   limit " . $limit);
            //$result = sql::result("select `pharmProID`,`pharmProName`,`pharmProName_en`,`pharmproducts`.`pharmproPrice`,`files`.`placeOnServer` from `pharmproducts`,`files` where `pharmProName` like '%" . $p['query'] . "%' or `pharmProName_en` like '%" . $p['query'] . "%' and `pharmproducts`.`pharmproImg`=`files`.`fileID` group by `pharmproducts`.`pharmProID`  limit " . $limit);
            $result[$keyname] = $resultx['result'];
            $result['nums'] = $resultx['nums'];
            $result['success'] = true;
        }
        //  print_rr($result);
        echo json_encode($result);
    }

}
