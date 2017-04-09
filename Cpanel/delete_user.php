<?php

include "check_auth.php";
require_once "../classes/delete_user.php";
include "../init/config.php";
$user_name = $_SESSION["login"];
$query = "select * from users_table where user_name='" .$user_name. "'";
$extract_admin_info = mysqli_query($db,$query);
$admin = mysqli_fetch_array($extract_admin_info,MYSQLI_ASSOC);


// delte user

if (isset($_GET["id"])) {
$id = intval($_GET["id"]);
$delete = new deleteUser();


}else {
  die ("<body style='background-color: #242c3c;'><center><h2 style='font-size:16pt;color:white'>
  You Do Not Have Perimission To Access This Page Directly
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
  <div class="alert"><center><h3><?php echo $delete->delete("users_table",$id); ?></h3></center></div>
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
    <img src="uploads/<?php echo $admin["photo"]; ?>" />
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
  <div class="all-articles-container">
   <div class="add-article-sign"><h3>All Members</h3></div>

  <div class="articles-section-container">

   <table style="width:100%; direction:ltr;">

       <tr>
       <th style="width:20%;font-size:10pt;">UserName</th>
       <th style="width:10%;font-size:10pt;">Email</th>
       <th style="font-size:10pt;">Password</th>
       <th style="font-size:10pt;">Authorization</th>
       <th style="font-size:10pt;">Date of Join</th>
       <th style=" width:20%;font-size:10pt;">Options</th>


       </tr>


  <?php

  $query = "select * from users_table order by id desc";

  $execute_query = mysqli_query($db,$query);


  while ($users = mysqli_fetch_array($execute_query,MYSQLI_ASSOC)) {
  if ($users["statue"] == "banned") {
    $button = "unbane";
  }else {
    $button = "bane";
  }
  if ($users["auth"] == "Manager") {
    $disabled = "none";
  }else {
    $disabled = "block";
  }
    echo '
    <tr>
    <th style="width:20%;font-size:10pt;">'.$users["user_name"].'</th>
    <th style="width:10%;font-size:10pt;">'.$users["email"].'</th>
    <th style="font-size:10pt;">'.$users["password"].'</th>
    <th style="font-size:10pt;">'.$users["auth"].'</th>
    <th style="font-size:10pt;">'.$users["joined"].'</th>
         <th class="properties" style=" width:30%;font-size:12pt;padding-right:5px;padding-left:0px;padding-top:20px">

       <div style="display:'.$disabled.'" class="edit-article users-edit"><a href="bane_user.php?id='.$users["id"].'"> <h3>'.$button.'</h3></a></div>
       <div style="display:'.$disabled.'" class="edit-article users-edit"><a href="delete_user.php?id='.$users["id"].'"> <h3>Delete</h3></a></div>
       </th>

    </tr>



    ';
  }




   ?>









      </table>






  </div>



  </div>




  </div>



</div>


</div>

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
$('.cpanel-left').load('all-users.php');

setTimeout(function () {
$(".alert-container").fadeOut();

}, 2000);
});
</script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script type="text/javascript">



  $('.slideshow-items').slick({
  infinite: true,
  slidesToShow: 6,
  centerMode: true,
  variableWidth: true,
  speed: 600,
  autoplay: true,
  autoplaySpeed: 1000,
 prevArrow:$('#prev'),
  nextArrow:$('#next'),
});
 </script>
  </body>
</html>
