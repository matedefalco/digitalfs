<?php
include "publicaciones.php";

class User {

  private $id;
  private $username;
  private $password;
  private $email;
  private $nombre;
  private $apellido;
  private $edad;
  private $dni;
  private $direccion;
  private $piso;
  private $cuit;
  private $sexo;
  private $publicaciones;

  public function __construct($array){ //en registro y login el array es post
    if(isset($array['id'])){
      $this->id = $array['id'];
    }
    if(isset($array['username'])){
      $this->username = $array['username'];
    }
    if(isset($array['password'])){
      $this->password = $array['password'];
    }
    if(isset($array['email'])){
      $this->email = $array['email'];
    }
    if(isset($array['nombre'])){
      $this->nombre = $array['nombre'];
    }
    if(isset($array['appelido'])){
      $this->apellido = $array['apellido'];
    }
    if(isset($array['edad'])){
      $this->edad = $array['edad'];
    }
    if(isset($array['dni'])){
      $this->dni = $array['dni'];
    }
    if(isset($array['direccion'])){
      $this->direccion = $array['direccion'];
    }
    if(isset($array['piso'])){
      $this->piso = $array['piso'];
    }
    if(isset($array['cuit'])){
      $this->cuit = $array['cuit'];
    }
    if(isset($array['sexo'])){
      $this->sexo = $array['sexo'];
    }
    if(isset($array['publicaciones'])){
      $this->publicaciones = $array['publicaciones'];
    }

  }

  public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getPiso(){
		return $this->piso;
	}

	public function setPiso($piso){
		$this->piso = $piso;
	}

	public function getCuit(){
		return $this->cuit;
	}

	public function setCuit($cuit){
		$this->cuit = $cuit;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getPublicaciones(){
		return $this->publicaciones;
	}

	public function setPublicaciones($publicaciones){
		$this->publicaciones = $publicaciones;
	}

}


?>
