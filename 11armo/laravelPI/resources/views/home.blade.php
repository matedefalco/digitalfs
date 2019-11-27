@extends('layouts.app')

@section('content')
<div class="container">
  <header>
    <nav class="cabecera">
      <input class="lupa" placeholder="Buscar" type="search" name="lupa" value="">
    <?php if(isset($_SESSION["email"])): ?>
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


    $username = [];
    $userimg = [];
    $mainimg = [];
    $mainimg[] = "orange.png";
    $mainimg[] = "foto.jpeg";
    $mainimg[] = "blue.jpg";
    $userimg[] = "user1.jpg";
    $userimg[] = "user2.jpg";
    $userimg[] = "user3.jpg";
    $username[] = "xXX_DestroyerOfSouls_XXx";
    $username[] = "Bon’Quisha";
    $username[] = "◯☾𝒪𝓃𝒾-𝒸𝒽𝒶𝓃◯☾";

    <article>
      <div class="post">

        <div class="user">
          <img class="user_img" src="images/{{user->post}}"alt="user img">
          <div class="user_name">
            <a href="#">{{user->name}}</a>
          </div>
        </div>

        <div class="main_img">
          <img src="storage/post_img/{{user->post}}" class="" alt="main image">
        </div>

        <div class="likes">
          <ul class="qualify">
            <li class="up">
              <a href="#"><i class="fa fa-angle-double-up fa-2x"></i></a>
            </li>
            <li class="down">
              <a href="#"><i class="fa fa-angle-double-down fa-2x"></i></a>
            </li>
            <li class="share">
              <a href="#"><i class="fa fa-share-square fa-2x"></i></a>
            </li>
            <li class="options">
              <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </article


  // for($i = 0;$i < count($mainimg); $i++){
  //
  <article>
    <div class="post">
      <div class="user">
        <img class="user_img" src="images/<?php echo $userimg[$i]; ?>"alt="user img">
        <div class="user_name">
          <a href="#">
            <?php echo $username[$i]; ?>
          </a>
        </div>
      </div>
      <div class="main_img">
        <img src="images/<?php echo $mainimg[$i]; ?>" class="" alt="main image">
      </div>
      <div class="likes">
        <ul class="qualify">
          <li class="up">
            <a href="#"><i class="fa fa-angle-double-up fa-2x"></i></a>
          </li>
          <li class="down">
            <a href="#"><i class="fa fa-angle-double-down fa-2x"></i></a>
          </li>
          <li class="share">
            <a href="#"><i class="fa fa-share-square fa-2x"></i></a>
          </li>
          <li class="options">
            <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </article>

// for($i = 0;$i < count($mainimg); $i++){

// <article>
//   <div class="post">
//     <div class="user">
//       <img class="user_img" src="images/$userimg[$i]; "alt="user img">
//       <div class="user_name">
//         <a href="#">
//           // echo $username[$i];
//         </a>
//       </div>
//     </div>
//     <div class="main_img">
//       <img src="images/ $mainimg[$i]; " class="" alt="main image">
//     </div>
//     <div class="likes">
//       <ul class="qualify">
//         <li class="up">
//           <a href="#"><i class="fa fa-angle-double-up fa-2x"></i></a>
//         </li>
//         <li class="down">
//           <a href="#"><i class="fa fa-angle-double-down fa-2x"></i></a>
//         </li>
//         <li class="share">
//           <a href="#"><i class="fa fa-share-square fa-2x"></i></a>
//         </li>
//         <li class="options">
//           <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i></a>
//         </li>
//       </ul>
//     </div>
//   </div>
// </article>

</main>
<br>
<br>
  <footer class="bottom_nav">
    <div class="nav_final">
        <a href="#"><i class="barra fa fa-home fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-image fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-plus-circle fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-comment fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-user fa-3x"></i></a>
    </div>
  </footer>

  <form action="/postear" method="POST">
@endsection
