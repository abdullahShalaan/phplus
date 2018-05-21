<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class user_api
 *
 * @author abdullah
 */
class user_api {

    //put your code here
//<<<<<<< HEAD
public static function register(){
    global $p;
    
    if(!isset($p['mobile']) ||strlen($p['mobile'])!=11){
        
        $result['status']=FALSE;
        $result['error']='error in mobile number';
    }else{
    $user=new user();    
    $user->userPhone=$p['mobile'];
    $user->read_by_field('userPhone');
    if($user->userID>0){
    $result['status']=FALSE;   
    $result['error']='mobileExists';
        
    }  else {
        if(isset($p['fullName']))
            $user->fullName=$p['fullName'];
               if(isset($p['facebook_id']))
            $user->facebook_id=$p['facebook_id'];
            $user->userJoin=  time();
            
        $user->create();
        $user->send_activation_to_mobile();
        if(isset($p['password'])){
            $user->userPassword=user::hash_password($user->userID, $p['password']);
            $user->update();
        }
        if($user->userID>0){
            
            $result['status']=TRUE;
            $result['userID']=$user->userID;
            $result['activation_code']=$user->activation;
//=======
//    public static function register() {
//        global $p;
//
//        if (!isset($p['mobile']) || $p['mobile'] < 11) {
//
//            $result['status'] = FALSE;
//            $result['error'] = 'error in mobile number';
//        } else {
//            $user = new user();
//            $user->userPhone = $p['mobile'];
//            $user->read_by_field('userPhone');
//            if ($user->userID > 0) {
//                $result['status'] = FALSE;
//                $result['error'] = 'mobileExists';
//            } else {
//                if (isset($p['fullName']))
//                    $user->fullName = $p['fullName'];
//                if (isset($p['facebook_id']))
//                    $user->facebook_id = $p['facebook_id'];
//                $user->userJoin = time();
//
//                $user->create();
//                $user->send_activation_to_mobile();
//                if (isset($p['password'])) {
//                    $user->userPassword = user::hash_password($user->userID, $p['password']);
//                    $user->update();
//                }
//                if ($user->userID > 0) {
//
//                    $result['status'] = TRUE;
//                    $result['userID'] = $user->userID;
//                    $result['activation_code'] = $user->activation;
//                }
//            }
//>>>>>>> ebrahim
        }
    }
    }

        echo json_encode($result);
    }

    public static function activate() {
        global $p;

        if (check_posts(['userID'])) {
            $user = new user($p['userID']);
            if ($user->userPhone != null) {
                $user->userStatus = 1;
                $user->update();
                $result['status'] = TRUE;
            } else {
                $result['status'] = FALSE;
                $result['error'] = 'userNotFound';
            }
        } else {
            $result['status'] = FALSE;
            $result['error'] = 'invalidUserID';
        }


        echo json_encode($result);
    }

    public static function update() {
        global $p;
        if (check_posts(['userID'])) {
            $user = new user($p['userID']);
            if ($user->userPhone != null) {
                $user->userStatus = 1;
                if (check_posts(['fullName']))
                    $user->fullName = $p['fullName'];
                if (check_posts(['password']))
                    $user->userPassword = user::hash_password($user->userID, $p['password']);
                if (check_posts(['userAddress']))
                    $user->userAddress = $p['userAddress'];

                if ($_FILES['img']['error'] == 0) {
                    $file = files::new_file('img', $user->userID);
                    $result['file_id'] = $file->fileID;
                    $user->userImg = $file->fileID;
                }

                $user->update();
                $result['status'] = TRUE;
            } else {
                $result['status'] = FALSE;
                $result['error'] = 'userNotFound';
            }
        } else {
            $result['status'] = FALSE;
            $result['error'] = 'invalidUserID';
        }
        echo json_encode($result);
    }

}
