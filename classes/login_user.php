<?php

// include config
include "init/config.php";
//

//the login class
class login_user {

//connection properities
public $con;
public $host;
public $host_user_name;
public $host_password;
public $database_name;

function __construct () {

// connection database information
$this->host = $GLOBALS["host"];
$this->host_user_name = $GLOBALS["host_user_name"];
$this->host_password = $GLOBALS["host_password"];
$this->database_name = $GLOBALS["database_name"];
//

// connect to database
$this->con = mysqli_connect($this->host,$this->host_user_name,$this->host_password,$this->database_name) or die("failed");


}

public function login ($table,$user_name_data,$password_data) {

  if (!empty($user_name_data) && !empty($password_data)) {

// filter data
$user_name = htmlspecialchars($user_name_data);
$password_safe_html = htmlspecialchars($password_data);
$password = md5($password_safe_html);

//*///////////////////*

// extract users data from database
$query = "select * from ".$table." WHERE user_name='".$user_name."' and password='".$password."'";
$login = mysqli_query($this->con, $query);
$count = mysqli_num_rows($login);
$data = mysqli_fetch_array($login,MYSQLI_ASSOC);


 if ($count == 1) {

   if($data["statue"] === "notbanned") {
   $_SESSION["login"] = $user_name;
   header("Location: Cpanel/index.php");
 }else if ($data["statue"] === "banned") {
   $result = "You Have Been Banned,Contact Managment";
 }
 }else {
   $result = "You Entered Wrong Username or Password";
 }



  }else {
    $result = "Please Enter All Information";
  }

  // print result
  echo $result;
  

}





}










 ?>
