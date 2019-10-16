<?php

abstract class Db
{

  function __construct($algo)
  {

  }

  public function validarinput($datos, $tipo){
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
      if(strlen($datosFinales['username']) == 0){
        $errores['username'] = "El campo es obligatorio.";
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
      } // else if( existeUsuario($email) ){
      //   $errores['email'] = "El email ya se encuentra registrado.";
      // }

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
      }

      if(strlen($datosFinales['pass']) == 0){
        $errores['pass'] = "El campo es obligatorio.";
      } else if(strlen($datosFinales['pass']) < 4){
        $errores['pass'] = "La contraseña debe tener al menos 4 caracteres.";
      }
    }
  }

}





?>
