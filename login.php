<?php
include("./codigo.php");
$errores = [];
$usrenametrim = "";
$emailtrim = "";
if($_POST){
	$errores = validarinput($_POST, "login");

	if(!$errores){
		$conn = OpenCon();
		if(!empty($_POST["email"]) && !empty($_POST["pass"])){
			$email = $_POST["email"];
			$conn = OpenCon();
			$query = $conn->prepare("SELECT password FROM users WHERE email = '$email' ");
			$query2 = $query->execute();
			$hashedpass = $query->fetch(PDO::FETCH_ASSOC);
			if(password_verify($_POST["pass"], $hashedpass["password"])){
				header("Location:trabajo.php");
					//aca hay que hacer el login
				exit;
			}
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

      	<input type="submit" value="Login" class="button">
      	<p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
      	<p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     	</div>
    </form>

</body>
</html>
