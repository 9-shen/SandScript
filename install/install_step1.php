<?php

require "../init/config.php";



$setup_1 = mysqli_query($db,"
CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `auth` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `statue` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


$setup_2 = mysqli_query($db,"
CREATE TABLE `website_settings` (
`statue` int(11) NOT NULL,
`home_views` int(11) NOT NULL,
`cp_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


$setup_3 = mysqli_query($db,"
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);");

$setup_4 = mysqli_query($db,"
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;");




if ($setup_4 == true) {
header("Location: install_step2.php");
}




?>
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
     font-size:16pt;
    }
    img {
     position:relative;
     top:150px;
    }
 </style>
    <body>
        <center>
<img src="../images/ajax_loader.gif" width="30" height="30"/>
        </center>
        <center>
            <h4>Please wait...</h4>
        </center>



 <script src="../js/jquery-3.1.0.min.js"></script>
 <script>

 </script>
    </body>
   </html>
