<?php 
class clients {
 
 use datatrait ;

 CONST key="id";

 CONST table="clients";

 public $id,$name,$email,$serial_no,$license_no,$validations_no,$login,$password,$secure,$code,$mac,$exp,$status;

 static function main(){
     if(isset($_POST['action']) and $_POST['action']=='add_client' and check_posts(['name','email'])){
    $newclient=new clients();
    foreach ($_POST as $key => $value) {
        if($key=='action')
            continue;
        $newclient->$key=$value;
        
    }
    $newclient->create();
    header("location:".SITE_URL);
    exit;
         
     }
     if(isset($_POST['action']) and $_POST['action']=='edit_client' and check_posts(['id','name','email'])){
      
         $newclient=new clients($_POST['id']);
         
    foreach ($_POST as $key => $value) {
        if($key=='action')
            continue;
        $newclient->$key=$value;
        
    }
    $newclient->update();
    header("location:".SITE_URL);
    exit;
         
     }
      if(isset($_POST['action']) and $_POST['action']=='del_client' and check_posts(['id'])){
      
         $newclient=new clients($_POST['id']);
         
         $newclient->delete();
         
    header("location:".SITE_URL);
    exit;
         
     }
     $clients=new clients();
     $fulllist=$clients->read_multi_filter();
     assign('clients', $fulllist);
     
     disp("clients");
 }
}
 