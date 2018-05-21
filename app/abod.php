<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class abod
 *
 * @author abdullah
 */
class abod {

    //public static
    //note that connect class already loaded in the setting file
    // Connect to database function Start
        public static function abod_db($host, $db, $user, $password) {
            global $connection;
        $connection = mysqli_connect("$host", "$user", "$password",$db);
        
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}else{
return true;

}
    }

    // Connect to database function end
    //clear the main html tags like html,head,body and return the body content
    public static function clear_body($gi) {
        ob_start();
        include"$gi";
        $out2 = ob_get_contents();
        ob_end_clean();

        $start = explode("<body>", $out2);
        $start2 = explode("</body>", $start[1]);

// positive limit
        $html = $start2[0];
        return $html;
//return $out2;
    }

    public static function fix_entry($en) {
        global $connection;
        $en = htmlspecialchars($en);
        $en = mysqli_real_escape_string($connection,$en);
        return $en;
    }

    public static function get_num_rows($query) {
        global $connection;
        $a = mysqli_num_rows(mysqli_query($connection,$query));
        return $a;
    }


}
