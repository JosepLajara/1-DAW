<?php
  $conector = new mysqli("Direccion","nom_user","contraseña","BBDD");
  if ($conector->connect_errno){
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
  }else {
    echo "aqui va el codigo";
  }
?>
