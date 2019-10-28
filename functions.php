<?php

function validarinput($datos, $tipo){
  $errores = [];
  $datosFinales = [];

  foreach($datos as $key => $value){
    if($key == "userName" || $key == "email"){
      $datosFinales[$key] = trim($value);
    }else{
      $datosFinales[$key] = $value;
    }
  }
  if($tipo == "registro"){
    if(strlen($datosFinales['userName']) == 0){
      $errores['userName'] = "El campo es obligatorio.";
    }

    if(strlen($datosFinales['nombre']) == 0){
      $errores['nombre'] = "El campo es obligatorio.";
    } else if( !ctype_alpha($datosFinales['nombre'])){
      $errores['nombre'] = "Por favor ingrese caracteres alfabéticos.";
    }
    if(strlen($datosFinales['apellido']) == 0){
      $errores['apellido'] = "El campo es obligatorio.";
    } else if( !ctype_alpha($datosFinales['apellido'])){
      $errores['apellido'] = "Por favor ingrese caracteres alfabéticos.";
    }

    //validar email
    if(strlen($datosFinales['email']) == 0){
      $errores['email'] = "El campo es obligatorio.";
    } else if(!filter_var($datosFinales['email'], FILTER_VALIDATE_EMAIL)){
      $errores['email'] = "Por favor ingrese un email en formato correcto.";
    } else if(existeUsuario($datosFinales['email']) ){
     $errores['email'] = "El email ya se encuentra registrado.";
    }

    //validar contraseña
    if(strlen($datosFinales['pass']) == 0){
      $errores['pass'] = "El campo es obligatorio.";
    } else if(strlen($datosFinales['pass']) < 4){
      $errores['pass'] = "La contraseña debe tener al menos 4 caracteres.";
    }

     //Validar retypePassword
    if(strlen($datosFinales['repass']) == 0){
      $errores['repass'] = "El campo es obligatorio.";
    } else if($datosFinales['repass'] !== $datosFinales['pass']){
      $errores['repass'] = "Las contraseñas no coinciden";
    }

    //Validar HM
    if(!isset($datosFinales['hm'])){
      $errores['hm'] = "Por favor elija una opción";
    }

    //Validar TYC
    if(!isset($datosFinales['tyc'])){
      $errores['tyc'] = "Por favor acepte los términos y condiciones.";
    }
  }
  if($tipo == "login"){
    if(strlen($datosFinales['email']) == 0){
      $errores['email'] = "El campo es obligatorio.";
    } else if(!filter_var($datosFinales['email'], FILTER_VALIDATE_EMAIL)){
      $errores['email'] = "Por favor ingrese un email en formato correcto.";
    } elseif(!existeUsuario($datosFinales['email'])){
      $errores['email'] = "El usuario no está registrado";
    }

    if(strlen($datosFinales['pass']) == 0){
      $errores['pass'] = "El campo es obligatorio.";
    } else {
      $user = buscarUsuarioPorEmail($datos["email"]);
      if(!password_verify($datos["pass"],$user["password"])){
        $errires["pass"] = "Usuario o contraseña son incorrectos";
      }
    }
  }
  return $errores;
}

function crearUsuario(){
  return [
    "userName" => trim($_POST['userName']),
    "nombre" => trim($_POST['nombre']),
    "apellido" => trim($_POST['apellido']),
    "sexo" => $_POST['hm'],
    "email" => trim($_POST['email']),
    "password" => password_hash($_POST['pass'], PASSWORD_DEFAULT),
  ];
}

function loguearUsuario($email){
  $_SESSION["email"] = $email;
  if(isset($_POST["recordame"])){
    set_cookie("email",$email,time()+60*60*60);
  }
}

function usuarioLogueado(){
  return isset($_SESSION["email"]);
}

function guardarUsuario($usuario){
  $json = file_get_contents("db.json");
  // var_dump($json);
  $array= json_decode($json, true);
  $array["usuarios"][] = $usuario;
  // var_dump($array);
  $json = json_encode($array, JSON_PRETTY_PRINT);
  file_put_contents("db.json",$json);
}

function buscarUsuarioPorEmail($email){
  $json = file_get_contents("db.json");
  $db = json_decode($json, TRUE);
  // var_dump($db);
  foreach($db['usuarios'] as $usuario){
    if($email == $usuario["email"]){
      return $usuario;
    }
  }
  return null;
}

function existeUsuario($email){
  return buscarUsuarioPorEmail($email) != null;
}

// function {
//   $conn = OpenCon();
//
//   $query = $conn->prepare("INSERT INTO users (username, password, email, nombre, apellido, sexo)
//   VALUES ('$usuario[username]', '$usuario[password]', '$usuario[email]', '$usuario[nombre]', '$usuario[apellido]', '$usuario[sexo]')");
//
//   if ($query2 = $query->execute() === TRUE) {
//       //agregar que se HAGA el login, con session
//       header("Location:trabajo.php");
//       exit;
//   } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }
 ?>
