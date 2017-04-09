<?php
include "../init/config.php";
include "check_auth.php";
require_once "../classes/register_user.php";
if(isset($_POST["sent"])) {

  $add = new registeruserCp();



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
   <div class="alert"><center><h3><?php echo $add->registerCp("users_table",$_POST["user_name"],$_POST["user_password"],$_POST["user_email"],$_POST["auth"]); ?></h3></center></div>
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
     <img src="images/youssef.jpg" />
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
 <div class="cpanel-left">
<div class="add-article-container">

    <div class="add-article-sec">
    <div class="add-article-sign"><h3>Add Member</h3></div>
    <div class="information-container">
<form id="form" action="" method="post" enctype="multipart/form-data">
    <div class="info ">
        <h3>Username :</h3>
           <input type='text' name="user_name"   />
        </div>
        <div class="info ">
            <h3>Password :</h3>
               <input type='password' name="user_password"  />
            </div>
            <div class="info ">
                <h3>Repeat Password :</h3>
                   <input type='password' name="repeat_password"   />
                </div>
                <div class="info ">
                    <h3>Email :</h3>
                       <input type='text' name="user_email"  />
                    </div>


    <div class="info cat-thing">

<select class="cat-or-division" name="auth">
<option disabled selected >Choose Member Authorization</option>
<option value="CO-manager">CO-manager</option>
<option value="Editior">Editior</option>


</select>
<input type="hidden" name="sent" />
</form>
 </div>

    </div>

    </div>





    <button class="publish">Add</button>
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
setTimeout(function () {
$(".alert-container").fadeOut();

}, 2000);

$(".publish").click(function () {

$("#form").submit();

});
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
<script type="text/javascript" src="../js/select2.full.min.js"></script>
<script type="text/javascript">
    $(".multi").select2({dir:'rtl'});
    $(".cast").select2({
  tags: true,
dir:'rtl',
    formatNoMatches: function() {
        return '';
    },
    dropdownCssClass: 'select2-hidden'
});
</script>

  </body>
</html>
