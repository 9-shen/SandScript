<?php

include "../init/config.php";
$query = "insert into website_settings (statue) values ('1')";
$execute = mysqli_query($db,$query);


 ?>

<!DOCTYPE html>
   <html>
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../Cpanel/uploads/logo.png" />
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/materliaze-rtl.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
 <title>SandScript Installation</title>
    </head>
 <style>
 @import url('https://fonts.googleapis.com/css?family=Open+Sans');
* {
font-family: 'Open Sans', sans-serif;
}
    body {
        background-color: #00c7fc;
        margin: 0;
        padding:0;
    }
    h2 {
        color:white;
        font-size:48pt;
        position:relative;
        top:-300px;

    }
    span {
        color:white;
        font-size:24pt;
          position:relative;
        top:-300px;
    }
    button {
        background-color: #00c7fc;
        color:white;
        border:none;
        padding:15px 30px 15px 30px;
         position:relative;
        top:225px;
        display: none;
    }
    h4 {
     color:white;
     position: relative;
     top:175px;
     font-size:20pt;
    }
    img {
     position:relative;
     top:150px;
    }
 </style>
    <body>
        <center>

    <span>All Files Have Been Installed Successfully</span>
        </center>
        <center>
            <button class="z-depth-3">Go To Home</button>
        </center>


 <script src="../js/jquery-3.1.0.min.js"></script>
 <script>
    $(function () {
       $("h2").animate({top:'125px'},1000);
         $("span").animate({top:'170px'},1200);
          $("button").fadeIn(1700);
          $("button").click(function ()  {

            window.location = "../index.php";

          });

    });
 </script>
    </body>
   </html>
