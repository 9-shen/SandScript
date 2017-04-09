<?php

// include config
@include "init/config.php";

// the class
class registeruser {

// connection properities
public $con;
public $hostname;
public $user_name;
public $password;
public $database_name;
//

  function __construct()
  {
    // database connection information
    $this->hostname = $GLOBALS["host"]; // host server
    $this->user_name = $GLOBALS["host_user_name"]; // username
    $this->password = $GLOBALS["host_password"]; // password
    $this->database_name = $GLOBALS["database_name"]; // the database name

    /*/////////////////////////////*/
    // connect to database
    $this->con = mysqli_connect($this->hostname,  $this->user_name,$this->password,$this->database_name);
  }

public function register($table,$user_name_data,$password_data,$email_data) {
if (!empty($user_name_data) && !empty($password_data) && !empty($email_data)) {

// filter inputs
  $user_name = htmlspecialchars($user_name_data);
  $password_strip_html = htmlspecialchars($password_data);
  $email = htmlspecialchars($email_data);
//
$query_extract_usernames = "select * from " . $table . " where user_name='" . $user_name. "'";
$extract_username_from_database = mysqli_query($this->con, $query_extract_usernames);
$count_user_names = mysqli_num_rows($extract_username_from_database);
// validate inputs
if (strlen($user_name) > 25 || strlen($user_name) < 5) {
  $result = "UserName Should be at least 6 character and Under 25 character";
} else if ($count_user_names > 0 ) {
  $result = "this username is already exist,please choose another username";
} else if (strlen($password_strip_html) < 8 || strlen($password_strip_html) > 30) {
  $result = "Password Should Be at Least 8 character and not longer than 30 character";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $result = "You Enterd Invalid email,please enter valid email";
} else {
// encrypt password
$password = md5($password_strip_html);
// enter data to database
  $query = "insert into " . $table . " (user_name,password,email,auth,photo,joined,statue) values ('".$user_name."'
  ,'".$password."','".$email."','EDITIOR','user-default.png',now(),'notbanned')";
$register = mysqli_query($this->con, $query);
//

  $result = "You Have Been Registered Successfull";

}


} else {
  $result = "Please Fill All data Fields";
}

// echo result
echo $result;
}
}

class registeruserCp {

// connection properities
public $con;
public $hostname;
public $user_name;
public $password;
public $database_name;
//

  function __construct()
  {
    // database connection information
    $this->hostname = $GLOBALS["host"]; // host server
    $this->user_name = $GLOBALS["host_user_name"]; // username
    $this->password = $GLOBALS["host_password"]; // password
    $this->database_name = $GLOBALS["database_name"]; // the database name

    /*/////////////////////////////*/
    // connect to database
    $this->con = mysqli_connect($this->hostname,  $this->user_name,$this->password,$this->database_name);
  }

public function registerCp ($table,$user_name_data,$password_data,$email_data,$auth) {
if (!empty($user_name_data) && !empty($password_data) && !empty($email_data)) {

// filter inputs
  $user_name = htmlspecialchars($user_name_data);
  $password_strip_html = htmlspecialchars($password_data);
  $email = htmlspecialchars($email_data);
//
$query_extract_usernames = "select * from " . $table . " where user_name='" . $user_name. "'";
$extract_username_from_database = mysqli_query($this->con, $query_extract_usernames);
$count_user_names = mysqli_num_rows($extract_username_from_database);
// validate inputs
if (strlen($user_name) > 25 || strlen($user_name) < 5) {
  $result = "UserName Should be at least 6 character and Under 25 character";
} else if ($count_user_names > 0 ) {
  $result = "this username is already exist,please choose another username";
} else if (strlen($password_strip_html) < 8 || strlen($password_strip_html) > 30) {
  $result = "Password Should Be at Least 8 character and not longer than 30 character";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $result = "You Enterd Invalid email,please enter valid email";
} else {
// encrypt password
$password = md5($password_strip_html);
// enter data to database
  $query = "insert into " . $table . " (user_name,password,email,auth,photo,joined,statue) values ('".$user_name."'
  ,'".$password."','".$email."','".$auth."','user-default.png',now(),'notbanned')";
$register = mysqli_query($this->con, $query);
//

  $result = "You Have Been Registered Successfull";

}


} else {
  $result = "Please Fill All data Fields";
}

// echo result
echo $result;
}
}






 ?>
