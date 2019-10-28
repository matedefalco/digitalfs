<?php
session_start();
include "auth.php";
include "classes/user.php";
include "classes/mysql.php";
include "functions.php";

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/trabajo.css">
    <title>Trabajo Final</title>
  </head>
  <body>
    <header>
      <nav class="cabecera">
        <input class="lupa" placeholder="Buscar" type="search" name="lupa" value="">
      <?php if(usuarioLogueado()): ?>
        <a class="logout" href="destroy.php">
          <button type="button">LOGOUT</button>
        </a>
      <?php else: ?>
        <a class="login" href="login.php">
          <button type="button">LOGIN</button>
        </a>
        <a class="login" href="registro.php">
          <button type="button">REGISTRO</button>
        </a>
      <?php endif ?>
      </nav>
    </header>
    <main>
      <?php

  //esto de aca es asqueroso y hay que cambiarlo eventualmente.
  //todo esto se reemplaza usando el objeto publicacion, que tiene obj comment
      $userName = [];
      $userimg = [];
      $mainimg = [];
      $mainimg[] = "orange.png";
      $mainimg[] = "foto.jpeg";
      $mainimg[] = "blue.jpg";
      $userimg[] = "user1.jpg";
      $userimg[] = "user2.jpg";
      $userimg[] = "user3.jpg";
      $userName[] = "xXX_DestroyerOfSouls_XXx";
      $userName[] = "Bon’Quisha";
      $userName[] = "◯☾𝒪𝓃𝒾-𝒸𝒽𝒶𝓃◯☾";
      //hay que rellenar cada uno con mysql
      for($i = 0;$i < count($mainimg); $i++){

       ?>

      <article>
        <div class="post">
          <div class="user">
            <img class="user_img" src="images/<?php echo $userimg[$i]; ?>"alt="user img">
            <div class="user_name">
              <a href="#">
                <?php echo $userName[$i]; ?>
              </a>
            </div>
          </div>
          <div class="main_img">
            <img src="images/<?php echo $mainimg[$i]; ?>" class="" alt="main image">
          </div>
          <div class="likes">
            <ul class="qualify">
              <li class="up">
                <a href="#"><i class="fa fa-angle-double-up"></i></a>
              </li>
              <li class="down">
                <a href="#"><i class="fa fa-angle-double-down"></i></a>
              </li>
              <li class="share">
                <a href="#"><i class="fa fa-share-square"></i></a>
              </li>
              <li class="options">
                <a href="#"><i class="fa fa-ellipsis-h"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </article>
    <?php } ?>

    <?php
    for($i = 0;$i < count($mainimg); $i++){

     ?>

    <article>
      <div class="post">
        <div class="user">
          <img class="user_img" src="images/<?php echo $userimg[$i]; ?>"alt="user img">
          <div class="user_name">
            <a href="#">
              <?php echo $userName[$i]; ?>
            </a>
          </div>
        </div>
        <div class="main_img">
          <img src="images/<?php echo $mainimg[$i]; ?>" class="" alt="main image">
        </div>
        <div class="likes">
          <ul class="qualify">
            <li class="up">
              <a href="#"><i class="fa fa-angle-double-up"></i></a>
            </li>
            <li class="down">
              <a href="#"><i class="fa fa-angle-double-down"></i></a>
            </li>
            <li class="share">
              <a href="#"><i class="fa fa-share-square"></i></a>
            </li>
            <li class="options">
              <a href="#"><i class="fa fa-ellipsis-h"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </article>
  <?php } ?>

  <?php
  for($i = 0;$i < count($mainimg); $i++){

   ?>

  <article>
    <div class="post">
      <div class="user">
        <img class="user_img" src="images/<?php echo $userimg[$i]; ?>"alt="user img">
        <div class="user_name">
          <a href="#">
            <?php echo $userName[$i]; ?>
          </a>
        </div>
      </div>
      <div class="main_img">
        <img src="images/<?php echo $mainimg[$i]; ?>" class="" alt="main image">
      </div>
      <div class="likes">
        <ul class="qualify">
          <li class="up">
            <a href="#"><i class="fa fa-angle-double-up"></i></a>
          </li>
          <li class="down">
            <a href="#"><i class="fa fa-angle-double-down"></i></a>
          </li>
          <li class="share">
            <a href="#"><i class="fa fa-share-square"></i></a>
          </li>
          <li class="options">
            <a href="#"><i class="fa fa-ellipsis-h"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </article>
  <?php } ?>
</main>
  <br>
  <br>
    <footer class="bottom_nav">
      <ul class="nav_final">
        <li class="barra home">
          <a href="#"><i class="fa fa-home"></i></a>
        </li>
        <li class="barra stock">
          <a href="#"><i class="fa fa-image"></i></a>
        </li>
        <li class="barra add">
          <a href="#"><i class="fa fa-plus-circle"></i></a>
        </li>
        <li class="barra chat">
          <a href="#"><i class="fa fa-comment"></i></a>
        </li>
        <li class="barra profile">
          <a href="#"><i class="fa fa-user"></i></a>
        </li>
      </ul>
    </footer>

  </body>
</html>
