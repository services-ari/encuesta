<<?php

  function Conectar(){
    $conn = null;
    $host = 'localhost';
    $db = 'servit23_encuestas1';
    $user = 'servit23';
    $pwd = 'QwS0Y7+w.n3mW2';
    try {
      $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    } catch (PDOException $e) {
      echo ':( Error al conectar con la base de datos ya existe otra conexion)'.$e;
      exit;
    }

    
    return $conn;
  }

 ?>
