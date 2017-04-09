<?php include "check_auth.php";?>
<div class="website_info_saved messagesent" style="   position: fixed;
    top: 0;
    width: 100%;
    height: auto;
    overflow: auto;
    left:0px;
    padding: 20px 15px 20px 15px;
    text-align: center;
    background-color: #ed2553;
    z-index: 9999999999999;
    display:none;"><h2
        style=" color: white;
    margin: 0;
    font-size: 17pt; font-family:DroidKufi;">Your Message Has Benn Sent Successfully</h2></div>
<div class="add-article-container">

    <div class="add-article-sec">
    <div class="add-article-sign"><h3>Support</h3></div>
    <div class="information-container support-sec">
    <div class="support-info">
        <p>
          This section is dedicated to the technical support of this script so if you experience any
          Technical problems in the script or any query or any modifications you want to make Fill out the form below and your problem will be refered to us and we will contact you as soon as possible
        </p>


        </div>
<div class="support-form">
<input type='text' placeholder='YourName' class="client-name"  />
<input type="text" placeholder="YourEmail" class="client-email" />
<textarea placeholder="YourMessage" class="client-message"></textarea>
  <button class="send">Send</button>
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
$(".send").click(function () {

   var name = $(".client-name").val();
   email = $(".client-email").val();
   message = $(".client-message").val();
   $.ajax({

    url:"support_message_proccess.php",
    type:"post",
    data:{name: name, email: email, message: message},
    success: function (data) {

      $(".messagesent").slideDown();
 setTimeout(function () {

  $(".messagesent").slideUp();
 }, 2000);

    }



   });


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
