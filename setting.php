<?php
 define('HOMEDIR', getcwd().'/');
 //$connection=null;
 
//error_reporting(0);
//---------- Database setting
$host="localhost";

    
$dbname="test010_new";
$dbuser="test010_new";


$dbpass='new';
$encoding = "SET CHARACTER SET utf8";
//$x=  scandir("core");
//foreach ($x as $value) {
//    if(preg_match("/_core.php/", $value)){
//        require_once 'core/'.$value;
//    }
//}
////print_r($x);
//exit;

        $connection = mysqli_connect($host, $dbuser, $dbpass,$dbname);
        $connection->set_charset("utf8");

//        mysqli_query($connection, $encoding);
//$connection=new mysqli($host, $dbpass, $dbuser, $dbname);
        
if (!$connection) {
    echo 'this is error';
    die("Connection failed: " . mysqli_connect_error());
}
//abod::abod_db("$host","$dbname","$dbuser","$dbpass");

 

//echo sql::update('user', array("user"=>"khales","pass"=>"123456","email"=>"a@got.com"), array("user"=>"kh","id"=>"3333"));
//echo sql::select_query("usr",'*', array("user"=>"khales"),array("limit"=>"10,20","order"=>"a desc"));
require_once HOMEDIR."core/master_core.php";

function __autoload($classname) {
    $p=array("/api/","/app/","/app/0/","/app/manual/","/app/data/","/app/asmaa/","/app/ibrahim/","/app/zidan/");
    foreach ($p as $value) {
    $filename = HOMEDIR.$value. $classname .".php";
    
    if(file_exists($filename)){
    include_once($filename);    
    
    return;
    
    }
    
    }
    /*
     * auto create
    $filex=sql::ctc($classname);
    //print_r($filex);
    if($filex->table){
    include $filex->file;   
    }else{
        
        echo "Errooooooooor";
        exit;
    }
    
    */
// print_r($filex);
    
    //echo "autoloaded";
}
spl_autoload_register('__autoload');


//ob_start();
//session_start();
date_default_timezone_set("Africa/Cairo");
$currentLang='ar';
$defaultlang='ar';
$langv=[];
$langvars=[];
$current_route_method=null;
$route=new routes();
define('default_language', 'ar');
 define('SDBG', 'yes');
 define('STYLE_DIR', '/style/lomixa/');
 
 define('SITE_URL',"http://test010.serv2000.com/new/");
 define('ADMIN_DIR', 'ad_tw/');
 define('ADMIN_URL', SITE_URL.ADMIN_DIR);
 define('SITE_NAME', 'Lomixa app');
 define('STYLE',HOMEDIR.STYLE_DIR);
 
 define('STYLE_URL',SITE_URL.STYLE_DIR);
 define('STYLE_ADMIN',HOMEDIR.ADMIN_DIR.STYLE_DIR);
 define('STYLE_ADMIN_URL',SITE_URL.ADMIN_DIR.STYLE_DIR);
//sql::recreate_full(TRUE);
//foreach (sql::tables() as $value) {
//    $xx=sql::ctc($value);
//}
//print_rr(sql::tables());
//$xx=sql::ctc('videos');
//print_rr($xx);
require_once(HOMEDIR.'libs/Smarty.class.php');

$site= array();

$site['url']=SITE_URL;
$site['style']=STYLE_URL;
$site['name']=SITE_NAME;
$site['admin_url']=ADMIN_URL;
$site['admin_url_style']=STYLE_ADMIN_URL;
$site['email']="auto@lomixa.com";

$smarty = new Smarty;
if(SDBG!='yes')
$smarty->error_reporting = error_reporting() & ~E_NOTICE; 

$smarty->addTemplateDir(STYLE);
$smarty->assign("site",$site);
//disp("home");

//print_rr($smarty);

$site_keywords="";
$site_description="";
$site_template="";

//$x=types::get("4");


//print_r(types::get());
//echo count(types::get());
//$x=new videoCourse();
//echo $x->table;

//print_rr((array)new data(6));

//$d=new data();
//print_rr($d->read_multi_search("hi ya man"));
//$n=new nado();
//$n->dox();
//$d->name="x";
//$d->urlLink="as";
//$d->create();
//var_dump($d->delete());
//        $d->type=1;
//        $d->name="ahmed";
//        $insert=$d->create();
//        if($insert[0]==TRUE){
//        print_r($insert);
//        }
//$d->read_row();
//$dx =new data();
//$dx->name="nado";
//$dx->description="nado is a programmer";
//$dx->create();
//$video=new videoCourse();
//print_r($video->create());

//$vdata=new videoData(4);

//$vdata->add([4510,'http://yahoo.com','http://msn.com']);
//print_rr($vdata);
//echo sql::select_query("data", array("col1","col2"), ["key1"=>"a7aaaaaaaaaa","key2"=>["as","ads","kkkkk"]], ["like"=>TRUE]);
//$xx=new newdata();
//print_r($xx->all_cols());
//echo table_fields("videoCourseData");
//$l=new newdata();
////echo $l->a;
//print_r($l->all_cols());


//$tb->assemb();
//echo $tb->content;



//create table class
//$x=sql::ctc("x");
//print_r(sql::tables());



//create full website data classes
//sql::recreate_full(TRUE);
if(SDBG=='yes'){
    
    if(isset($_SESSION['last_query'])){
        $last_query=$_SESSION['last_query'];
        
        
    }
    
}
