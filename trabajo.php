<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trabajo.css">
    <title>Trabajo Final</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light top">
        <input class="lupa" type="search" name="lupa" value="">
        <a class="login" href="login.php">
          <button type="button" class="btn btn-primary">LOGIN</button>
        </a>
      </nav>
    </header>
    <main>
      <?php




      ?>
      <nav class="post">
        <nav class="user w-50 p-3">
          <nav class="user_img w-25 p-3">
            <!-- Le quise poner que la imagen tuviera un 25%de ancho ya que a la caja padre la puse 50... de forma que fuera 25% foto y 25% texto pero la foto se esconde y el texto de al lado no flota -->
            <a href="#">
              <img class="rounded-circle" src="images/download.jpeg" alt="">
            </a>
          </nav>
          <nav class="user_name">
            <a href="#">
              USER NAME
              <?php  ?>
            </a>
          </nav>
        </nav>
        <nav class="main_img">
          <img src="images/foto.jpeg" class="w-100 p-3 pr-0 pl-0" alt="Responsive image">
          <!-- Puse que la foto ocupara el 100% de la imagen y me aparecia un padding en todas direcciones que intente sacar pero no me deja -->
          <?php "etiquetas de la foto" ?>
        </nav>
        <nav>
          <ul class="list-group list-group-horizontal interaction">
            <li class="up list-group-item">
              <a href="#"><i class="fa fa-angle-double-up"></i></a>
            </li>
            <li class="down list-group-item">
              <a href="#"><i class="fa fa-angle-double-down"></i></a>
            </li>
            <li class="share list-group-item">
              <a href="#"><i class="fa fa-share-square"></i></a>
            </li>
            <li class="options list-group-item">
              <a href="#"><i class="fa fa-ellipsis-h"></i></a>
            </li>
          </ul>
        </nav>
      </nav>
    </main>
    <footer class="position-relative">
      <!-- A la caja padre le pongo position relative de bootstrap para poder ponerle fixed abajo -->
      <ul class="w-100 p-3  fixed-bottom">
        <!-- Uso position fixed bottom para que baje a medid que el usuario navega en la pagina pero aparece chico y a un costado -->
        <li class="home">
          <a href="#"><i class="fa fa-home"></i></a>
        </li>
        <li class="stock">
          <a href="#"><i class="fa fa-images"></i></a>
        </li>
        <li class="add">
          <a href="#"><i class="fa fa-plus-circle"></i></a>
        </li>
        <li class="chat">
          <a href="#"><i class="fa fa-comment-dots"></i></a>
        </li>
        <li class="profile">
          <a href="#"><i class="fa fa-user-alt"></i></a>
        </li>
      </ul>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
