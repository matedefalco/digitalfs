<?php
session_start();
include "auth.php";
include "classes/user.php";
include "classes/mysql.php";
include "functions.php";

?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/landing.css">
    <title>Landing Page</title>
  </head>
  <body>
    <div class="landingdiv">
      <img class="landing_img" src="images/landingpic.png"alt="landing img">
      <div class="landing_buttons">
        <a class="login" href="index.php">
          Logearte
        </a>
        <a class="register" href="index.php">
          Registrarte
        </a>
        <a class="continue" href="index.php">
          Continuar sin crear cuenta ni loguearse
        </a>
      </div>

    </div>



    </body>
</html>
