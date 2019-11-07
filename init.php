<?php
//Todo lo necesario para instanciar clases.

include "clases/db.php";
include "clases/dbmysql.php";
include "clases/dbjson.php";
include "clases/user.php";
include "clases/auth.php";
include "clases/validador.php";

$data = "db.json";
$auth = new Auth;
// $db = new DbJson($data);
$db = new DbMysql();
