<?php
include "../init/config.php";
class updateUser {

public $con;
public $host;
public $host_user_name;
public $host_password;
public $database_name;

public function __construct () {

 $this->host = $GLOBALS["host"];
 $this->host_user_name = $GLOBALS["host_user_name"];
 $this->host_password = $GLOBALS["host_password"];
 $this->database_name = $GLOBALS["database_name"];
 $this->con = mysqli_connect( $this->host, $this->host_user_name, $this->host_password, $this->database_name);


}

public function editUser($table,$id,$unclear_email,$unclear_user_picture) {
if (!empty($unclear_email)) {

$user_picture = htmlspecialchars($unclear_user_picture);
$email = htmlspecialchars($unclear_email);
$user_picture = htmlspecialchars($unclear_user_picture);
$edit_query  = "update " . $table . " set email='".$email. "' , photo='" .$user_picture. "' where id=" . $id;
$update = mysqli_query($this->con, $edit_query);

if ($update == true) {
  $resault = "information Updated Successful";

}else {
  $resault = "Something Went Wrong, Please Try Again";
}
}else {
  $resault = "Please Fill all Data fields";
}
return $resault;

}



}












 ?>
