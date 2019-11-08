<?php
include "init.php";

if(isset($_SESSION["email"])){
	header("Location:index.php");
	exit;
}

$errores = [];
if($_POST){
	$errores = Validador::validarLogin($_POST);

	if(!$errores){
		User::loguearUsuario($_POST["email"]);
		header("Location:index.php");
		exit;
	}
}
?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="./css/login.css">


</head>
<body>
    <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Login</h1>
     <div class="contenedor">

			 <div class="input-contenedor">
				 <label for="email"><i class="fas fa-envelope icon"></i></label>
				 <input type="text" placeholder="Email" id="email" name="email">
				 <small id="emailHelp">
					 <?php if(isset($errores['email'])) :?>
						 <h6><?= $errores['email'] ?></h6>
					 <?php endif ?>
					</small>
			 </div>

			 <div class="input-contenedor">
			 	<label for="email"><i class="fas fa-key icon"></i></label>
			 	<input type="password" placeholder="Contraseña" name="pass" id="pass">
			 	<small id="emailHelp">
			 		<?php if(isset($errores['pass'])) :?>
			 			<h6><?= $errores['pass'] ?></h6>
			 		<?php endif ?>
			 	 </small>
			 </div>
			 	<input type="checkbox" name="recordame" value="">
      	<input type="submit" value="Login" class="button">
      	<p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     	</div>
    </form>

</body>
</html>
