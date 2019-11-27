<?php
session_start();
include "functions.php";
include "classes/user.php";
include "classes/mysql.php";

$userNameOK = "";
$nombreOk = "";
$apellidoOk = "";
$emailOk = "";

if(usuarioLogueado()){
  header("Location:index.php");
  exit;
}

if($_POST){
  $errores = [];
  $errores = validarinput($_POST, "registro");

  $userNameOK = trim($_POST["userName"]);
  $nombreOk = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $emailOk = trim($_POST["email"]);

  if(!$errores){
    $usuario = crearUsuario();
    guardarUsuario($usuario);
    loguearUsuario($_POST["email"]);
    header("Location:index.php");
    exit;
  }
  // var_dump($errores);
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
 <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	<h1>Registrate</h1>
	    <div class="contenedor">

				<div class="input-contenedor">
					<label for="userName"><i class="fas fa-user icon"></i></label>
          <?php if(!isset($errores["userName"])): ?>
		      <input type="text" placeholder="userName" id="userName" name="userName" value="<?= $userNameOK ?>">
        <?php else: ?>
           <input type="text" placeholder="userName" id="userName" name="userName">
         <?php endif ?>
					<small id="emailHelp" >
						<?php if(isset($errores['userName'])) :?>
							<h6><?= $errores['userName'] ?></h6>
					<?php endif ?>
					 </small>
	      </div>

	  		<div class="input-contenedor">
					<label for="nombre"><i class="fas fa-user icon"></i></label>
            <?php if(!isset($errores["nombre"])): ?>
		      <input type="text" placeholder="Nombre" id="nombre" name="nombre" value="<?= $nombreOk ?>">
        <?php else: ?>
           <input type="text" placeholder="Nombre" id="nombre" name="nombre">
        <?php endif ?>
					<small id="emailHelp" >
						<?php if(isset($errores['nombre'])) :?>
							<h6><?= $errores['nombre'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

				<div class="input-contenedor">
					<label for="apellido"><i class="fas fa-user icon"></i></label>
          <?php if(!isset($errores["apellido"])): ?>
		       <input type="text" placeholder="Apellido" id="apellido" name="apellido" value="<?= $apellidoOk ?>">
         <?php else: ?>
           <input type="text" placeholder="Apellido" id="apellido" name="apellido">
         <?php endif ?>
					<small id="emailHelp" >
						<?php if(isset($errores['apellido'])):?>
							<h6><?= $errores['apellido'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

	      <div class="input-contenedor">
					<label for="email"><i class="fas fa-envelope icon"></i></label>
            <?php if(!isset($errores["email"])): ?>
              <input type="text" placeholder="Email" id="email" name="email" value="<?= $emailOk ?>">
            <?php else: ?>
		          <input type="text" placeholder="Email" id="email" name="email">
            <?php endif ?>
					<small id="emailHelp" >
						<?php if(isset($errores['email'])):?>
							<h6><?= $errores['email'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

	      <div class="input-contenedor">
					<label for="pass"><i class="fas fa-key icon"></i></label>
	      	<input type="password" placeholder="Contraseña" id="pass" name="pass">
					<small id="emailHelp" >
						<?php if(isset($errores['pass'])):?>
							<h6><?= $errores['pass'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

				<div class="input-contenedor">
	      	<label for="repass"><i class="fas fa-key icon"></i></label>
	      	<input type="password" placeholder="reContraseña" id="repass" name="repass">
					<small id="emailHelp" >
						<?php if(isset($errores['repass'])) :?>
							<h6><?= $errores['repass'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

				<p>Sexo:</p>
				<input type="radio" name="hm" value="h"> Hombre
				<input type="radio" name="hm" value="m"> Mujer
				<input type="radio" name="hm" value="o"> Otro
        <br>
        <small id="hm" >
          <?php if(isset($errores['hm'])) :?>
            <?= $errores['hm'] ?>
          <?php endif ?>
         </small>
				<div class="form-group form-check">
					<?php if(isset($_POST['tyc'])): ?>
							<input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" checked>
					<?php else: ?>
							<input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" >
					<?php endif ?>
					<label for="tyc" class="form-check-label">Acepto los términos y condiciones.</label>
          <br>
					<small id="emailHelp" >
						<?php if(isset($errores['tyc'])) :?>
							<?= $errores['tyc'] ?>
						<?php endif ?>
					 </small>
				</div>
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
	      <input type="submit" value="Registrate" class="button">
	      <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>

	     </div>
    </form>
</body>
</html>
