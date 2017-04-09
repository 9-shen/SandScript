<?php

include "check_auth.php";
include "../init/config.php";



 ?>
<body>


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
