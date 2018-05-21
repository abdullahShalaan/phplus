<?php

function assign($name, $val) {
    global $smarty;
    $smarty->assign($name, $val);
}
function sfetch($file){
    global $smarty;
    return $smarty->fetch($file);
}

function lomixatemplate($file) {
      
$cats= routecategory::full_cats();
     assign('cats', $cats);
    
            assign('filex', $file.'.tpl');
        disp('main/tpl');
}
function check_ajax() {

    if (@!eregi(SITE_URL, $_SERVER[HTTP_REFERER])) {

        exit;
    }
}

function check_posts($param=[]) {
   
    $error=[];
    foreach ($param as $value) {
        if(!isset($_POST[$value]) || $_POST[$value]==null || $_POST[$value]=='' )
            $error[]=$value;
    }
    if(count($error)>0)
        return FALSE;
    else
        return TRUE;
}
function print_rr($array, $exit = true) {
    echo"<pre>
";
    print_r($array);
    echo"
</pre>";
    if ($exit == true) {
        exit;
    }
}

function check_m() {
    global $connection;
    if (SDBG == 'yes') {
        echo mysqli_error($connection);
       return FALSE;
        exit;


        //
    }
}

function check_length($string, $max) {
    if (strlen($string) > $max) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function fix_entry($en) {
    global $connection;
    $en = htmlspecialchars($en);
        $en = mysqli_real_escape_string($connection,$en);
    return $en;
}

function secure_entry($en){
    global $connection;
        $en = mysqli_real_escape_string($connection,$en);
    return $en;
}
function red_t($page) {
    global $smarty;
    ob_clean();
    if (!@header("location:$page")) {
        $smarty->assign('pagex', $page);
        tpl_load("red_t");
    }
    exit;
}

function send_mails($to, $subject, $message) {
    global $site;

    $x = rand(1111, 99999999);
    $headers = 'From:Twaasl.net <admin@twaasl.net>' . "\r\n" .
            'Reply-To: info@twaasl.net' . "\r\n" .
            'X-Mailer: Serv2000 -' . $to . '/' . phpversion() . $x;
    $return_array['msg'] = $message;
    $return_array['to'] = $to;

    if (SDBG == 'yes') {
        $return_array['success'] = true;
    } else {
        if (mail($to, $subject, $message, $headers)) {
            $return_array['success'] = true;
        } else {
            $return_array['success'] = false;
        }
    }
    return $return_array;
}
//
//function send_SMS($mob, $msg) {
//    $cc = new cURL();
//    $p = 14552888544 / 999;
//    $param = "username=twaasl.net&password=" . $p . "&message=" . $msg . "&numbers=" . $mob . "&sender=twaasl.net&unicode=E";
//    return $cc->post('http://www.twaaasl.com/api/sendsms.php', $param);
//}

function disp($temp) {

    global $smarty;
  //  routes::assign_cats();
    $smarty->display(STYLE . $temp . ".tpl");
}
function last_query(){
    print_rr($_SESSION['last_query']);
    echo "<br><textarea cols=150 rows=6>".$_SESSION['last_query']."</textarea>";
    exit;
}
function do_title($title,$cas="0"){
$title=str_replace(" ","-","$title");
$title=str_replace("%","-","$title");
$title=str_replace("\"","-","$title");
$title=str_replace("''","-","$title");
$title=str_replace("'","-","$title");
$title=str_replace("---","-","$title");
$title=str_replace("--","-","$title");
$title=str_replace("!",'',"$title");
$title=str_replace("%",'',"$title");
$title=str_replace("»",'',"$title");
$title=str_replace("«",'',"$title");
$title=str_replace("&",'',"$title");
$title=str_replace(";",'',"$title");
$title=str_replace("#",'',"$title");
$title=str_replace(":",'',"$title");
$title=str_replace("+",'',"$title");
$title=str_replace("/",'-',"$title");
$title=str_replace("\\",'-',"$title");


$title=str_replace("aacute",'',"$title");
if($cas!=1){
$title=urlencode($title);
}
return $title;
} 