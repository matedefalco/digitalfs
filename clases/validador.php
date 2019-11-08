<?php

/**
 *
 */
class Validador
{
  public static function validarRegistro($datos){
    global $db;

    $errores = [];
    $datosFinales = [];

    foreach($datos as $key => $value){
      if($key == "username" || $key == "email"){
        $datosFinales[$key] = trim($value);
      }else{
        $datosFinales[$key] = $value;
      }
    }
    // Validar username
    if(strlen($datosFinales['username']) == 0){
      $errores['username'] = "El campo es obligatorio.";
    } else if( !ctype_alpha($datosFinales['username'])){
      $errores['username'] = "Por favor ingrese caracteres alfabéticos sin espacios.";
    } //Si queremos validar números y espacios dentro del campo necesitamos una expresión regular y la función de php que la evalue. La función es preg_match(). En nuestro caso: preg_match($regExpr, $datosFinales['username']); // TODO: Pasar la expresión regular.

    //validar email
    if(strlen($datosFinales['email']) == 0){
      $errores['email'] = "El campo es obligatorio.";
    } else if(!filter_var($datosFinales['email'], FILTER_VALIDATE_EMAIL)){
      $errores['email'] = "Por favor ingrese un email en formato correcto.";
    }  else if( $db->existeUsuario($datosFinales['email']) ){
       $errores['email'] = "El email ya se encuentra registrado.";
     }

   //validar contraseña
    if(strlen($datosFinales['pass']) == 0){
      $errores['pass'] = "El campo es obligatorio.";
    } else if(strlen($datosFinales['pass']) < 4){
      $errores['pass'] = "La contraseña debe tener al menos 4 caracteres.";
    }

     //Validar repass
     if(strlen($datosFinales['repass']) == 0){
       $errores['repass'] = "El campo es obligatorio.";
     } else if($datosFinales['pass'] !== $datosFinales['repass']){
        $errores['repass'] = "Las contraseñas no coinciden";
      }

      //Validar TYC
      if(!isset($datosFinales['tyc'])){
        $errores['tyc'] = "Por favor acepte los términos y condiciones.";
      } // TODO: incluir el tyc dentro del json.

      //Validar errores en la carga de la imagen de perfil.
      //if(strlen($_FILES['avatar']['name']) == 0){
      //  $errores['avatar'] = "Por favor suba una imagen de perfil.";
      //} else {
      //  $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);
      //
      //  if($ext !== "jpg" && $ext !== "png" && $ext !== "jpeg"){
      //    $errores['avatar'] = "El archivo debe ser una imagen de tipo .jpg, .jpeg, .png";
      //  }
      //
      //}

    return $errores;
  }

  public static function validarLogin($datos){
    $db = new Dbjson("db.json");
    $errores = [];
    //validar email
    if(strlen($datos['email']) == 0){
      $errores['email'] = "El campo es obligatorio.";
    } else if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)){
      $errores['email'] = "Por favor ingrese un email en formato correcto.";
    } else if( !$db->existeUsuario($datos['email']) ){
      $errores['email'] = "El email no se encuentra registrado.";
     }

   //validar contraseña
    if(strlen($datos['pass']) == 0){
      $errores['pass'] = "El campo es obligatorio.";
    } else {
      $usuario = $db->buscarUsuarioPorEmail($datos['email']);
      if( !password_verify($datos['pass'], $usuario->getPassword()) ){
      $errores['pass'] = "La contraseña es incorrecta.";
      }
    }
    return $errores;
  }

}
