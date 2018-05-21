<?php 
class weekofdays {
 
 use datatrait ;

 CONST key="dayID";

 CONST table="weekofdays";
 CONST weekDays=[
     "Saturday"=>1,
     "Sunday"=>2,
     "Monday"=>3,
     "Tuesday"=>4,
     "Wednesday"=>5,
     "Thursday"=>6,
     "Friday"=>7
 ];
 public $dayID,$dayName,$tKey;
 
 static function currentDay() {
     $day=new self(self::weekDays[date("l" )]);
     return $day;
 }
}
 ?>