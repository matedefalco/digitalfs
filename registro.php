<!DOCTYPE html>
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
 <form class="formulario" method="post">
	<h1>Registrate</h1>
	    <div class="contenedor">

				<div class="input-contenedor">
		      <i class="fas fa-user icon"></i>
		      <input type="text" placeholder="username" id="username" name="username">
	      </div>

	  		<div class="input-contenedor">
		      <i class="fas fa-user icon"></i>
		      <input type="text" placeholder="Nombre" id="nombre" name="nombre">
	      </div>

				<div class="input-contenedor">
					<i class="fas fa-user icon"></i>
					<input type="text" placeholder="Apellido" id="Apellido" name="apellido">
	      </div>

	      <div class="input-contenedor">
		      <i class="fas fa-envelope icon"></i>
		      <input type="text" placeholder="Email" id="email" name="email">
	      </div>

	      <div class="input-contenedor">
	      	<i class="fas fa-key icon"></i>
	      	<input type="password" placeholder="Contraseña" id="pass" name="pass">
	      </div>

				<p>Sexo:
				<input type="radio" name="hm" value="h"> Hombre
				<input type="radio" name="hm" value="m"> Mujer
				<input type="radio" name="hm" value="o"> Otro
	      <input type="submit" value="Registrate" class="button">
	      <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
	      <p>¿Ya tienes una cuenta?<a class="link" href="login.html">Iniciar Sesion</a></p>

	     </div>
    </form>

		<?php
		function OpenCon()
		{
			$dbhost = "localhost";
			$dbuser = "juanpi";
			$dbpass = "223554504";
			$db = "pf";
			$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

			return $conn;
		}

    function CloseCon($conn)
		{
			$conn -> close();
		}

		$conn = OpenCon();

		if(!empty($_POST["username"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["hm"])){
			$sql = "INSERT INTO users (username, password, email, nombre, apellido, sexo)
	  	VALUES ('$_POST[username]', '$_POST[pass]', '$_POST[email]', '$_POST[nombre]', '$_POST[apellido]', '$_POST[hm]')";

			if ($conn->query($sql) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }

		}

		?>
</body>
</html>
