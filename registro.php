<?php
session_start();
include "./codigo.php";
include "classes/user.php";
include "classes/mysql.php";

if($_POST){
  $errores = [];
  $errores = validarinput($_POST, "registro");

  if(!$errores){
    $usuario = crearUsuario();
  	$conn = OpenCon();

		$query = $conn->prepare("INSERT INTO users (username, password, email, nombre, apellido, sexo)
		VALUES ('$usuario[username]', '$usuario[password]', '$usuario[email]', '$usuario[nombre]', '$usuario[apellido]', '$usuario[sexo]')");

		if ($query2 = $query->execute() === TRUE) {
				//agregar que se HAGA el login, con session
				header("Location:trabajo.php");
				exit;
		} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
		}
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
</head>
<body>
 <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	<h1>Registrate</h1>
	    <div class="contenedor">

				<div class="input-contenedor">
					<label for="username"><i class="fas fa-user icon"></i></label>
		      <input type="text" placeholder="username" id="username" name="username">
					<small id="emailHelp" >
						<?php if(isset($errores['username'])) :?>
							<h6><?= $errores['username'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

	  		<div class="input-contenedor">
					<label for="nombre"><i class="fas fa-user icon"></i></label>
		      <input type="text" placeholder="Nombre" id="nombre" name="nombre">
					<small id="emailHelp" >
						<?php if(isset($errores['nombre'])) :?>
							<h6><?= $errores['nombre'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

				<div class="input-contenedor">
					<label for="apellido"><i class="fas fa-user icon"></i></label>
					<input type="text" placeholder="Apellido" id="apellido" name="apellido">
					<small id="emailHelp" >
						<?php if(isset($errores['apellido'])) :?>
							<h6><?= $errores['apellido'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

	      <div class="input-contenedor">
					<label for="email"><i class="fas fa-envelope icon"></i></label>
		      <input type="text" placeholder="Email" id="email" name="email">
					<small id="emailHelp" >
						<?php if(isset($errores['email'])) :?>
							<h6><?= $errores['email'] ?></h6>
						<?php endif ?>
					 </small>
	      </div>

	      <div class="input-contenedor">
					<label for="pass"><i class="fas fa-key icon"></i></label>
	      	<input type="password" placeholder="Contraseña" id="pass" name="pass">
					<small id="emailHelp" >
						<?php if(isset($errores['pass'])) :?>
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

				<p>Sexo:
				<input type="radio" name="hm" value="h"> Hombre
				<input type="radio" name="hm" value="m"> Mujer
				<input type="radio" name="hm" value="o"> Otro
				<div class="form-group form-check">
					<?php if(isset($_POST['tyc'])): ?>
							<input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" checked>
					<?php else: ?>
							<input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" >
					<?php endif ?>
					<label for="tyc" class="form-check-label">Acepto los términos y condiciones.</label>
					<small id="emailHelp" >
						<?php if(isset($errores['tyc'])) :?>
							<?= $errores['tyc'] ?>
						<?php endif ?>
					 </small>
				</div>
	      <input type="submit" value="Registrate" class="button">
	      <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
	      <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>

	     </div>
    </form>
</body>
</html>
