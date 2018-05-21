<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class user
 *
 * @author abdullah
 */
class user2 {

    public $logged_status;
    public $id;
    public $user_name;
    public $password;
    public $realname;
    public $email;
    public $mobile;
    public $status;
    public $place;
    /*

     * 0= not active user
     * 1=active user
     * 2=active admin
     * 3=not active admin
     * 4=
     *          */
    public $balance;
    public $password2;
    public $password3;
    public $las_login;
    public $reg_date;
    public $utype;
    public $act;
    public $compare_pass;
    public $u_array;

    //public  $pass2;
    function __construct() {
        //$this->email=$this->abod_pass(123);
    }

    /*

     * usage 
     * check_username(username,email)
     * checking for existing username or email
     * and return array contain 2 keys email,user_name 
     * if the 2 values is 0 you can continue the registeration proccess
     *  */

    public static function check_username($user_name, $email) {

        $where = array('user_name' => $user_name);

        //print_rr($where);
        $res = sql::select('user_name', $where, 'user');



        $where2 = array('email' => $email);

        //print_rr($where);
        $res2 = sql::select('email', $where2, 'user');
//            echo sql::select_query('user','email', $where2);
//            exit;
        // print_rr($res2);
        $ret = array('user_name' => $res['num'], 'email' => $res2['num']);
        /*            print_rr($ret);
         */
        return $ret;
    }

    public static function register_user($array) {
        $array['password'] = user::abod_pass($array['password']);
        if ($array['status'] == NULL) {
            $array['status'] = 1;
        }
        $array['reg_date'] = time();
        return sql::insert('user', $array);
    }

    //session function register or check  Start

    function session($what = "check", $type = "user") {
        //this switch is what want to do check or register session and check if the data in the sesion is true or no this is 
        // for admin and user
        switch ($what) {
            case 'check':
                //check stat
                if ($_SESSION["logged_$type"] != true) {
                    $this->logged_status = 'no';
                } else {

                    $this->logged_status = 'yes';
                    $usernamex = $_SESSION["username_$type"];
                    $passwordx = $_SESSION["password_$type"];


                    $this->check_user_data($usernamex, $passwordx, $mdf = "yes", "check_only", "no");
                    if ($this->compare_pass == 'no') {

                        //header("location:login.php");
                        //$this->logged_status='no';
                        //$_SESSION['logged_$type']=false;
                    }
                }
                //check end
                break;
            case reg:
                //session_destroy(); clear session before register
                $type = 'user';
                $_SESSION["logged_$type"] = true;
                $_SESSION["id_$type"] = $this->id;
                $_SESSION["username_$type"] = $this->user_name;
                $_SESSION["password_$type"] = $this->password;
                break;
        }
    }

    //session function register or check  End
    //check the user data and register session and redirect to the page that the user was Start
    public function check_user_data($user, $pass, $mdf = "no", $do = "check_only", $page = "no") {
        global $connection;
        //$pass2=  user::abod_pass($pass);
        switch ($mdf) {
            case no:
                $pass2 = self::abod_pass($pass);
                break;
            default:
                $pass2 = $pass;
                break;
        }
        $query_user = mysqli_query($connection,"select id from `user` where `user_name`='$user' and `password`='$pass2' ");
        $rw = mysqli_num_rows($connection,$query_user);
        if ($rw == 1) {
            $this->compare_pass = 'yes';
            $resrw = mysqli_fetch_assoc($connection,$query_user);

            $userrw = $resrw[id];
            //setting the class variables
            $this->set_data($userrw);
            //what want to do after check

            switch ($do) {
                //register the userdata in the session
                case reg_session:
                    $tttype = $this->utype;
                    //echo $tttype."<br>";
                    $this->logged_status = 'yes';
                    $this->session("reg", $tttype);

                    $this->set_last_login();
                    //session_destroy();
                    // foreach($_SESSION as $key=> $value){
                    // echo "$key -----"." $value <br>";
                    // }
                    // exit;
                    //abodtop

                    if ($page == 'no') {
                        header("location:index.php");

                        exit;
                    } elseif ($page == 'x') {
                        echo" ";
                    } else {
                        header("location:$page");

                        exit;
                    }

                    break;

                case check_only:
                    $this->compare_pass = "yes";

                    break;


                default:
                    header("location:index.php");
                    exit;
                    break;
            }
        } else {
            $this->compare_pass = "no";

///////////
            switch ($do) {
                case check_only:
                    $this->compare_pass = "no";

                    break;

                default:
                    if ($page != x) {
                        header("location:login.php");
                    } else {
                        
                    }
                    break;
            }
        }
    }

    //check the user data and register session and redirect to the page that the user was End	
    //set the user variable in the class Start
    public function set_data($userid) {
        global $connection;
        $query_sd = mysqli_query($connection,"SELECT * FROM `user` where `id`='$userid' ");
        $result_sd = mysqli_fetch_assoc($query_sd);
        $this->id = $result_sd[id];
        $this->u_array[id] = $this->id;
        $this->user_name = $result_sd[user_name];
        $this->u_array[user_name] = $this->user_name;
        $this->password = $result_sd[password];
        $this->u_array[password] = $this->password;
        $this->realname = $result_sd[real_name];
        $this->u_array[realname] = $this->realname;
        $this->email = $result_sd[email];
        $this->u_array[email] = $this->email;

        $this->mobile = $result_sd[mobile];
        $this->u_array[mobile] = $this->mobile;



        $this->u_array[mobile_status] = $result_sd['mobile_status'];
        $this->u_array[mobile_act] = $result_sd['mobile_act'];
        $this->u_array[mobile_code] = $result_sd['mobile_code'];
        $this->u_array[mobile_code_retry] = $result_sd['mobile_code_retry'];






        $this->status = $result_sd[status];
        $this->u_array[status] = $this->status;
        $this->balance = $result_sd[balance];
        $this->u_array[balance] = $this->balance;
        $this->password2 = $result_sd[password2];
        $this->u_array[password2] = $this->password2;
        $this->password3 = $result_sd[password3];
        $this->u_array[password3] = $this->password3;
        $this->las_login = $result_sd[las_login];
        $this->u_array[las_login] = $this->las_login;
        $this->reg_date = $result_sd[reg_date];
        $this->u_array[reg_date] = $this->reg_date;
        $this->place = $result_sd[place];

        $this->set_act();
    }

    //set the user variable in the class End
    //check the status of user if admin or if user and if active or not 
    function set_act() {
        switch ($this->status) {
            case 0:
                $this->utype = user;
                $this->act = no;
                break;
            case 1:
                $this->utype = user;
                $this->act = yes;
                break;
            case 2:
                $this->utype = admin;
                $this->act = yes;
                break;
            case 3:
                $this->utype = admin;
                $this->act = no;
                break;
        }
    }

    //change the value of the last login in the database
    public function set_last_login() {
        global $connection;
        $sqlxl = "UPDATE `user` SET `las_login` = NOW() WHERE `id` ='$this->id' ";
        $qul = mysqli_query($connection,$sqlxl);
    }

    //password generator start
    public static function abod_pass($entry) {
        $entry = $entry . "New_websitefortourism";
        $entry = md5($entry);
        $entry = "f" . $entry . "x";
        $entry = md5("z" . $entry . "ssa");
        $entry = md5("ad" . $entry . "safsa");
        $entry = md5("w" . $entry . "x");
        $entry = md5("a" . $entry . "r");
        return $entry;
    }

    //password generator end
    //redirect to login page if no user login
    public function redirect_if_login($value) {
        if ($this->logged_status == $value) {
            if ($value == yes) {
                header("location:index.php");
            } else {
                header("location:login.php");
            }
            exit;
        }
    }

    //edit the userdata of the current object edit(array)
    public function edit_u($data) {
        return self::edit($data, $this->id);
    }

    //edit the userdata edit(array of columns want to edit, user id)
    public static function edit($data, $user) {
global $connection;
        $x = 1;
        $co = count($data);

        foreach ($data as $k => $u) {
            if ($x < $co) {
                $com = ",";
            } else {
                $com = "";
            }
            $s.="`$k`='$u' $com";
            $x++;
        }
        $query = "update `user` set $s where `user`.`id`='$user' ";
        $mysql_query = mysqli_query($connection,$query);
        return $mysql_query;
    }

}
