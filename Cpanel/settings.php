<?php

include "check_auth.php";
include "../init/config.php";

$query = "select * from website_settings";
$execute = mysqli_query($db,$query);
$statue = mysqli_fetch_array($execute,MYSQLI_ASSOC);




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
$(".publish").click(function (){

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
