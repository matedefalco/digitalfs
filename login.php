<?php include("./codigo.php"); ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="./css/login.css">


</head>
<body>
    <form class="formulario" method="post">
    <h1>Login</h1>
     <div class="contenedor">
      	<div class="input-contenedor">
      	<i class="fas fa-envelope icon"></i>
      	<input type="text" placeholder="Email" name="email" id="email">
      </div>

        <div class="input-contenedor">
        	<i class="fas fa-key icon"></i>
        	<input type="password" placeholder="Contraseña" name="pass" id="pass">
      	</div>
      	<input type="submit" value="Login" class="button">
      	<p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
      	<p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     	</div>
    </form>

		<?php
		if(!empty($_POST["email"])){
			$email = $_POST["email"];
			echo $email;
		}
		if(!empty($_POST["pass"])){
			$pass = $_POST["pass"];
			echo $pass;
			}
		$conn = OpenCon();
		$query = $conn->prepare("SELECT password FROM users WHERE email = '$email' ");
		$query2 = $query->execute();
		$hashedpass = $query->fetch(PDO::FETCH_ASSOC);
		if(password_verify($pass, $hashedpass["password"])){
			echo "LOGUEADO";
		}
		?>

</body>
</html>
