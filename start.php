<?php

require_once("setting.php");
$array_data=array('mission','vision','site_word','site_name');
$where=array('id'=>1);
$site_data=setting::get_setting($array_data, $where);
$smarty->assign('setting',$site_data[result][0]);
$tabs=tab::get_tab();
$smarty->assign('tabs',$tabs[result]);
//print_rr($tabs[result]);
//echo user::abod_pass('s');

//SELECT `id` FROM `places` WHERE `In_place`='64' 

/* @var $user type */
$user=new user();

$user->session('check','user');
$smarty->assign('logged',$user->logged_status);
//echo $user->logged_status;
//echo "logged status ya m3alem   ".$user->logged_status."<br>";
//$user->redirect_if_login('yes'); //redirect if not login to the login page
//$user->set_data();
//echo "logged status ya m3alem   x".$user->logged_status."x<br>";
//echo $_SESSION[logged_admin];

//exit;


//$smarty->assign("logged",$user->logged_status);
//$smarty->assign("logged",$user->u_array);
//print_r($user->logged_status);
//tpl_load('home');
//phpinfo();
if($user->logged_status=='yes'){
    
    
    $smarty->assign('user',$user->u_array);
    //print_rr($user->u_array);
    $smarty->assign('status_id',$user->status);
$smarty->assign('status_value',$user_type[$user->status][value]);
    if($user->utype=='admin'){
       // $ti=  time();
        $m_query="SELECT count(Id) as count FROM `messages` where `status`=0 and Id_aqqar is";
        $unread_order=  mysql_fetch_assoc(mysql_query($m_query." not null"));
        $unread_messages= mysql_fetch_assoc(mysql_query($m_query." null"));
      //  print_rr($unread_messages);
        $smarty->assign("unread",array('msg'=>$unread_messages['count'],'order'=>$unread_order['count']));
        
       
         
//         $stat['order']=$stat_ex_order['count'];
//         
      //  print_rr($stat);
        
    }
    
                $code_form=""
                        . "  <input placeholder='ادخل كود التفعيل' type=\"text\" id=\"final_activation\" > <input type=\"button\" id=\"final_click\" value=\"فعل\" onclick=\"activation_mobile_final(get_v('final_activation'))\"> <br>"
                        . ""
                        . "";
                
                if($user->u_array['mobile_code']>0){
                    
                    $smarty->assign("enter_code",$code_form);
                }
    
}

