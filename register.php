<?php
require "init/config.php";
// add view
$get_views = "select * from website_settings";
$extract_views = mysqli_query($db,$get_views);
$views_num = mysqli_fetch_array($extract_views,MYSQLI_ASSOC);
$new_view = $views_num["home_views"] + 1;
$view_query = "update website_settings set home_views=" . $new_view;
$execute_views_query = mysqli_query($db,$view_query);

if (isset($_SESSION["login"])) {
header("Location: Cpanel/index.php");
}
$query = "select * from website_settings";
$execute = mysqli_query($db,$query);
$statue = mysqli_fetch_array($execute,MYSQLI_ASSOC);
 if ($execute == false) {
   header("Location: install/install.php");
 }
require_once "classes/register_user.php";
$alert = "none";
if (isset($_POST['user_name'])) {
@$user_name = $_POST['user_name'];
@$password = $_POST['password'];
@$email = $_POST['email'];
@$add_user = new registeruser();

$alert = "none";
}else {
  echo "<center><h2 style='color:white;font-size:16pt;margin-top:10px;'>You Not Allowed To Enter This Page Directly Please Return to Home Page</center>";
}




?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SandScript 1.0</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/media.css" >
</head>

<body>
<div class="alert-container">
<div class="alert" style="display:<?php echo $alert; ?>"><center><h3><?php echo $add_user->register("users_table",$user_name,$password,$email); ?></h3></center></div>
</div>
<div class="pen-title">

<div class="container">
  <div class="card-animation"></div>
  <div class="card">
    <div class="title">
      <center>Login</center>
    </div>

    <form action="login.php" method="post">
      <div class="input-container">
        <input type="text" id="#{label}" required="required" name="user_name"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>LOGIN</span></button>
      </div>

    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form >
      <div class="input-container">
        <input type="text" id="#{label}" required="required" name="user_name"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="email" id="#{label}" required="required" name="email"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
<div class="footer">
  <a href="https://twitter.com/youssefcodeix"><h5>@YoussefMousa </h5></a>
</div>
    <script src="js/jquery-3.1.0.min.js"></script>
  <script >
  $(function () {

    $(".alert-container div").slideDown();

    setTimeout(function () {

    $(".alert-container div").fadeOut();

    }, 2000);

  });
  </script>
    <script src="js/index.js"></script>
    <script src="js/slick.min.js"></script>
</body>
</html>
