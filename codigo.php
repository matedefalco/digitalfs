<?php
function crearUsuario(){
  return [
    "username" => trim($_POST['username']),
    "nombre" => trim($_POST['nombre']),
    "apellido" => trim($_POST['apellido']),
    "sexo" => trim($_POST['hm']),
    "email" => trim($_POST['email']),
    "password" => password_hash($_POST['pass'], PASSWORD_DEFAULT),
  ];
}
?>
