<?php
@session_start();
//shutdown error reporting for security purposes
//error_reporting(0);
//Database connection information
$GLOBALS["host"] = "localhost"; // host server
$GLOBALS["host_user_name"] = "root"; // username
$GLOBALS["host_password"] = ""; // password
$GLOBALS["database_name"]= "sand_script"; // the database name

/*/////////////////////////////*/
// connect to database
@$db = new mysqli($host,$host_user_name,$host_password,$database_name);
 if($db-> connect_errno) {
   echo "<center><h2 style='color:white;font-size:14pt;'>Sorry there are some problems with the database connection....please check your info.</h2></center>";
 }




?>
