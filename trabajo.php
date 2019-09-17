<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/trabajo.css">
    <title>Trabajo Fimal</title>
  </head>
  <body>
    <?php


    ?>
    <header>
      <nav class="">
        <input class="lupa" type="search" name="lupa" value="">
        <a class="login" href="login.php">
          <button type="button">LOGIN</button>
        </a>
      </nav>
    </header>
    <main>
      <nav class="post">
        <nav class="user">
          <img class="user_img" src="images/download.jpeg" alt="">
          <div class="user_name">
            <a href="#">
              USER NAME
            </a>
          </div>
        </nav>
        <nav class="main_img">
          <img src="images/foto.jpeg" class="" alt="Responsive image">
        </nav>
        <nav>
          <ul class="">
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
        </nav>
      </nav>
    </main>

    <footer class="">
      <!-- A la caja padre le pongo position relative de bootstrap para poder ponerle fixed abajo -->
      <ul class="nav_final">
        <!-- Uso position fixed bottom para que baje a medid que el usuario navega en la pagina pero aparece chico y a un costado -->
        <li class="barra home">
          <a href="#"><i class="fa fa-home"></i></a>
        </li>
        <li class="barra stock">
          <a href="#"><i class="fa fa-images"></i>></a>
        </li>
        <li class="barra add">
          <a href="#"><i class="fa fa-plus-circle"></i></a>
        </li>
        <li class="barra chat">
          <a href="#"><i class="fa fa-comment-dots"></i></a>
        </li>
        <li class="barra profile">
          <a href="#"><i class="fa fa-user-alt"></i></a>
        </li>
      </ul>
    </footer>

  </body>
</html>
