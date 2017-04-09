<?php

include "check_auth.php";
include "../init/config.php";

$user_name = $_SESSION["login"];
$query1 = "select * from users_table where user_name='" .$user_name."'";
$get_user_data = mysqli_query($db,$query1);
$data = mysqli_fetch_array($get_user_data,MYSQLI_ASSOC);



 ?>
<div class="add-article-container">



    <div class="add-article-sec">

    <div class="add-article-sign"><h3>Account Setting</h3></div>

    <div class="information-container">

  <form action="account_setting_proccess.php" method="post" enctype="multipart/form-data" id="form">


        <div class="info">

        <h3>username:</h3>

            <input class="disabled2" type='text' value="<?php echo $data["user_name"]; ?>" disabled   />

    </div>

    <div class="info">

        <h3>Email:</h3>

           <input type="text"  name="user_email" value="<?php echo $data["email"]; ?>"  />

    </div>

        <div class="info">

        <h3>Password:</h3>

           <input type='text' value="<?php echo $data["password"]; ?>"  disabled  class="disabled2" />

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

$('.publish').click(function () {





    $('#form').submit();







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
