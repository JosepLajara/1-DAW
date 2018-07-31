<?php
  require 'variables_bbdd.php';

  $conector = new mysqli($server,$user,$password,$data_base);
  if ($conector->connect_errno){
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
  }else {
    $resultado=$conector->query('SELECT * FROM country WHERE Region="South America"');
  }
?>
