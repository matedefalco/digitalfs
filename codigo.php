<?php
function OpenCon()
  {
    $dbhost = "localhost";
    $dbuser = "juanpi";
    $dbpass = "223554504";
    $db = "pf";
    try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", "$dbuser", "$dbpass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
     echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
  }

function CloseCon($conn)
  {
    $conn -> close();
  }
?>
