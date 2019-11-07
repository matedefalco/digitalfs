<?php
/**
 *
 */
class DbMysql extends Db
{
  private $dbMysql;

  function __construct()
  {
    $config = file_get_contents("config.json");
    $configArray = json_decode($config, true);

    $host = $configArray['host'];
    $dbname = $configArray['dbname'];
    $port = $configArray['port'];

    $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
    $user = $configArray['user'];
    $pass = $configArray['password'];

    try {
      $this->dbMysql = new PDO($dsn, $user, $pass); //Resuelve la conexión.
      $this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

    } catch (\Exception $e) {
        echo "Hubo en error. Mensaje: ";
        var_dump($e->getMessage());
    }



  }

  public function guardarUsuario($user){

    $stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :name, :email, :password)");

    $stmt->bindValue(":name", $user->getUsername());
    $stmt->bindValue(":email", $user->getEmail());
    $stmt->bindValue(":password", $user->getPassword());

    $stmt->execute();
  }

  public function buscarUsuarioPorEmail($email){

    $stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE email = :email");

    $stmt->bindValue(":email", $email);
    $stmt->execute();

    $usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuarioArray){
        $usuario = new Usuario($usuarioArray);
    } else {
      $usuario = null;
    }
    return $usuario;
  }

  public function existeUsuario($email){
    return $this->buscarUsuarioPorEmail($email) !== null;
  }

  public function usuariosRegistrados(){
    // TODO: para ustedes. Hacer un SELECT de todos los usuarios y mostrarlos en la vista.
  }


}
