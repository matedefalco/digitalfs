<?php include("./codigo.php"); ?>
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
	      <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>

	     </div>
    </form>

		<?php
		if(!empty($_POST["pass"])){
			$hashedpass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
		}
		if(!empty($_POST["username"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["email"]) && !empty($hashedpass) && !empty($_POST["hm"])){
			$conn = OpenCon();

			$query = $conn->prepare("INSERT INTO users (username, password, email, nombre, apellido, sexo)
	  	VALUES ('$_POST[username]', '$hashedpass', '$_POST[email]', '$_POST[nombre]', '$_POST[apellido]', '$_POST[hm]')");

			if ($query2 = $query->execute() === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }

		}
		?>
</body>
</html>
