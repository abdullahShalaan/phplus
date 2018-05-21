<?php 
class sessions {
 
 use datatrait ;

 CONST key="sessionID";

 CONST table="sessions";

 public $sessionID,$userID,$secret,$expire;

}
 ?>