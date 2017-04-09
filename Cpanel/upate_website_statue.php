<?php

include "check_auth.php";
include "../init/config.php";

$query = "select * from website_settings";
$execute = mysqli_query($db,$query);
$statue = mysqli_fetch_array($execute,MYSQLI_ASSOC);

/// update
if(isset($_POST["website_statue"]))
$statue_num = $_POST["website_statue"];
$update_query = "update website_settings set statue='".$statue_num. "'";
$execute_update = mysqli_query($db,$update_query);



 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sand-ControlPanel</title>
<link rel="icon" href="images/Logo.png" />
<link href="../css/animate.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/materliaze-rtl.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<link href="../css/select2.min.css" rel="stylesheet">
<link href="cpanel-style.css" rel="stylesheet">
<link href="Cpanel-media.css" rel="stylesheet">
 </head>
<body>
<!-- Cpanel Header   -->
<div class="alert-container">
<div class="alert"><center><h3>Website Statue Has Been Saved</h3></center></div>
</div>
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
      <div class="add-article-sign"><h3>Website Settings</h3></div>
      <div class="information-container">


              <div class="info">
          <h3>Website Statue:</h3>
          <form id="form" action="upate_website_statue.php" method="post" >
      <select class="options" name="website_statue">
      <option <?php if ($statue["statue"] == 1) {echo "selected";}  ?> value="1">Open</option>
      <option <?php if ($statue["statue"] == 2) {echo "selected";}  ?> value="2">Closed</option>

      </select>

          </div>
      </div>
         <button class="publish save-setting">Save</button>
       </from>
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
