<?php 
class language {
 
 use datatrait ;

 CONST key="languageID";

 CONST table="language";

 public $languageID,$langName,$langCode,$langDirection;


public static function detect_lang($param) {
    
}
public static function change_lang($param) {
    
}
public static function functionName($param) {
    
}
public static function set_cookie($param) {
    
}
public static function load() {
    global $currentLang,$route,$defaultlang,$langv,$langvars;
    $defaultlangobj=new language();
    $defaultlangobj->langCode=$defaultlang;
    $defaultlangobj->read_by_field('langCode');
    $lang=new language();
    $langs=$lang->read_multi_filter([],['langName','langCode']);
    $lang->langCode=$currentLang;
    $lang->read_by_field('langCode');
  //  print_rr($lang);
    assign('direction', ($lang->langDirection=='1')?'ltr':'rtl');
    assign('current_lang',(array)$lang);
    assign('langs',$langs);
    $vars_query='SELECT DISTINCT(variableName) FROM `languagevariables` WHERE routeID='.$route->routeID;
    $vars_array=sql::result($vars_query);
     $vars=new languagevariables();
    $general=  $vars->read_multi_filter(['routeID'=>0,'languageID'=>$lang->languageID]);
    $vs=[];
  foreach ($general as $keyx => $valuex) {
      $vs[$valuex['variableName']]=$valuex['value'];
  }
    if(count($vars_array['result'])>0){
    $unique=[];
    foreach ($vars_array['result'] as $valx) {
        $unique[]=$valx['variableName'];
    }
      
   
      $v=  $vars->read_multi_filter(['routeID'=>$route->routeID,'languageID'=>$lang->languageID]);
     

  if(count($v)>0){
  foreach ($v as $key => $value) {
      $vs[$value['variableName']]=$value['value'];
  }}
  if(count($vars_array['result'])>0){
    foreach ($vars_array['result'] as $val_temp) {
        if(!array_key_exists($val_temp['variableName'], $vs)){
            
            $check_origin_array=$vars->read_multi_filter(['languageID'=>$defaultlangobj->languageID,'variableName'=>$val_temp['variableName']], ['value']);
          //  echo $val_temp['variableName'].' not exists'.' origin value is '.$check_origin_array[0]['value'];
        
            $vs[$val_temp['variableName']]=$check_origin_array[0]['value'];
        }
        
  }}
//  echo'<pre>';
//  print_r($vs);
//  print_rr($unique);
   

}
 $langv=$vs;
    $langvars=$vs;
  //  print_rr($vs);
     assign('var', $vs); //print_rr($vs);
}

}
 ?>