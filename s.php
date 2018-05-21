<?php
$host="dbhost";
$dbname="lomixa";
$dbuser="lomixa";

$dbpass='p@ss';
$encoding = "SET CHARACTER SET utf8";

        $connection = mysqli_connect($host, $dbuser, $dbpass,$dbname);
        mysqli_query($connection, $encoding);
        
if (!$connection) {
    echo 'this is error';
    die("Connection failed: " . mysqli_connect_error());
}

 $sql=mysqli_query($connection,"select tKey from languagevariables A Where Not exists (select lang_tKeyID from lang_tkey B Where A.tKey = B.lang_tKeyID)");
while($row=mysqli_fetch_array($sql))
{
    $id=$row['tKey'];
    
 $sqlx=mysqli_query($connection,"INSERT INTO `lang_tkey` (`lang_tKeyID`, `lang_origin`) VALUES(".$id.",'1')");
    
	//$laid = LAST_INSERT_ID();
	// $sqlx=mysqli_query($connection,"INSERT INTO `lang_tkey` (`lang_tKeyID`, `lang_origin`) VALUES(".$id.",'1')");

}

?>