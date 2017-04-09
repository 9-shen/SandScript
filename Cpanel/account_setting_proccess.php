<?php
include "../init/config.php";
require_once "../classes/update_user_info.php";
include "check_auth.php";
$user_name = $_SESSION["login"];
$query1 = "select * from users_table where user_name='" .$user_name."'";
$get_user_data = mysqli_query($db,$query1);
$data = mysqli_fetch_array($get_user_data,MYSQLI_ASSOC);

if(isset($_POST["user_email"])) {
  $query2 = "select * from users_table where user_name='" .$data["user_name"]. "'";
  $get_id = mysqli_query($db,$query2);
  $id = mysqli_fetch_array($get_id,MYSQLI_ASSOC);
  if (!empty($_FILES["user_picture"]["name"])) {

    $valid_file_types = array(

    "image/gif",

    "image/png",

    "image/jpeg",

    "image/pjpeg",

);



if (in_array($_FILES['user_picture']['type'],$valid_file_types) && strpos($_FILES['user_picture']['name'], 'php') == false) {



  $upload  = move_uploaded_file($_FILES["user_picture"]["tmp_name"],"uploads/" . $_FILES["user_picture"]["name"]);
  $user_picture = $_FILES["user_picture"]["name"];

}else {
$user_picture = "user-default.png";
}


  }else {
    $picture_query = "select * from users_table where id=" . $id["id"];
    $picture_extract = mysqli_query($db,$picture_query);
    $get_picture = mysqli_fetch_array($picture_extract,MYSQLI_ASSOC);
    $user_picture = $get_picture["photo"];
  }
  $update = new updateUser();


}else {
  die ("<body style='background-color: #242c3c;'><center><h2 style='font-size:16pt;color:white'>you can not access this page directly,please return to the previous page
  </h2></center>");
}


 ?>



<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SandScript1.0-ControlPanel</title>
<link rel="icon" href="images/Logo.png" />
<link href="../css/animate.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/materliaze-rtl.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<link href="cpanel-style.css" rel="stylesheet">
<link href="Cpanel-media.css" rel="stylesheet">

 </head>
<body>
  <div class="alert-container">
 <div class="alert"><center><h3><?php echo $update->editUser("users_table",$id["id"],$_POST["user_email"],$user_picture); ?></h3></center></div>
 </div>
<!-- Cpanel Header   -->
<div class="header">
<span class="over-layer"></span>
<div class="c-logo-right">
<h2>Control Panel - <span></span> SandScript V1.0 </h2>
</div>
    <div class="add-new-header-copy add-new">
    <a href="#">Add New Member</a>
    <img src="images/add-icon.png" width="25" height="25" />
    </div>
       <div class="add-new-header-copy">
    <a href="../index.php?show=false" target="_blank">Home Page</a>
    <img src="images/home-icon.png" width="25" height="25" />
    </div>
    <div class="admin-welcome">
    <img src="uploads/<?php echo $data["photo"]; ?>" />
        <span>Welcome...</span>
        <h3><?php
$admin_name = $_SESSION["login"];
$admin = $rest = substr($admin_name, 0, 5);
echo $admin;
        ?></h3><h4><img src="images/online.png" width="5" height="5"/></h4>
    </div>
    <div class="admin-info z-depth-2">
        <ul>
        <a href="#" class="account"><li>Account Setting</li></a>
        <a href="#" class="loadhelp"><li>Help</li></a>
        <a href="logout.php"><li>Logout</li></a>

        </ul>
    </div>
</div>
<!-- End Cpanel Header   -->
<!-- End Cpanel Header   -->
<!-- Cpanel-right-sec   -->
<div class="cpanel-right">
    <ul>
    <a href="#"><li class="home-button scrollToCon">Home<i class="fa fa-home"></i></li></a>
    <a href="#"><li class="add-new scrollToCon">Add New Member<i class="fa fa-pencil-square"></i></li></a>
    <a href="#"><li class="all-articles-load scrollToCon">All Members<i class="fa fa-file"></i></li></a>
    <a href="#"><li class="settings scrollToCon">Settings<i class="fa fa-gears"></i></li></a>
    <a href="#"><li class="support scrollToCon">Support<i class="fa fa-support"></i></li></a>
    </ul>
</div>
<!-- end right sec-->
<div class="cpanel-left">

  <div class="add-article-container">



      <div class="add-article-sec">

      <div class="add-article-sign"><h3>Account Setting</h3></div>

      <div class="information-container">

    <form action="account_setting_proccess.php" method="post" enctype="multipart/form-data" id="form">


          <div class="info">

          <h3>username:</h3>

              <input class="disabled2" type='text' value="<?php echo $data["user_name"]; ?>" disabled name="user_name"  />

      </div>

      <div class="info">

          <h3>Email:</h3>

             <input type="text"  name="user_email" value="<?php echo $data["email"]; ?>"  />

      </div>

          <div class="info">

          <h3>Password:</h3>

             <input type='text' value="<?php echo $data["password"]; ?>" name="user_password" disabled  class="disabled2" />

          </div>

       <div class="info">

          <h3>User picture:</h3>

             <input type="file" class="upload-thumb" name="user_picture"  />

      </div>

           <div class="info">

          <h3>UserAuthoriazation:</h3>

              <input type='text' disabled value="<?php echo $data["auth"]; ?>" class="disabled2"  />

      </div>



      </div>



         <button class="publish save-setting" name="send" >Save</button>

       </form>

      </div>


</div>



<div class="cpanel-left">



</div>



<!--  End Work Area  -->
<script src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
<script src="../js/ajax.js"></script>
<script src="../js/moviesstorm.js"></script>
<script type="text/javascript">
$(document).ready(function(){

     $(".button-collapse").sideNav();
$(".dropdown-down").click(function () {

   $(".mobile-dropdown").slideToggle();


});
$(".home-button").click(function () {

 $('.cpanel-left').load('index.php .home');

});
if ($(window).width() < 768) {

  $(".cpanel-right ul li").click(function () {

  $("html,body").animate({scrollTop:"400"});

  });
}
$(".loadhelp").click(function () {

$('.cpanel-left').load('support.php');

});
$(".account").click(function () {

$('.cpanel-left').load('account-setting.php');

});

setTimeout(function () {
$(".alert-container").fadeOut();

}, 2000);

});
</script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>




 </script>
  </body>
</html>
