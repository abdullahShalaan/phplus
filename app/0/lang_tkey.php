<?php 
class lang_tkey {
 
 use datatrait ;

 CONST key="lang_tKeyID";

 CONST table="lang_tkey";

 public $lang_tKeyID,$lang_origin;

 public static function add() {
     global $currentLang;
     $lang=new language();
     $lang->langCode=$currentLang;
     $lang->read_by_field('langCode');
     $l =new self();
     $l->lang_origin=$lang->languageID;
     $l->create();
     return $l->lang_tKeyID;
     
 }

}
 ?>