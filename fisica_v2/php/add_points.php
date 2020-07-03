<?php

  $nombre = $_POST["nombre"];
  $puntaje = $_POST["puntaje"];
  try {
    $conection = new PDO('mysql:host=localhost; dbname=fisica','root','');
    $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conection->exec("SET CHARACTER SET UTF8");
    $sql_query = "INSERT INTO notas (NOMBRE,PUNTAJE) VALUES (:name,:nota)";
    $result=$conection->prepare($sql_query);
    $result->execute(array(":name"=>$nombre,":nota"=>$puntaje));
    header("Location:../");
  } catch (Exception $e) {
    echo "error: " . $e;
  }

 ?>
