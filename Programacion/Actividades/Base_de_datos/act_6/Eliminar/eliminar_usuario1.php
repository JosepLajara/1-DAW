<?php

$conector = new mysqli("localhost","root","","programacion(5)");
if ($conector->connect_errno){
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else {
  //almacenar en variables los datos recogidos
  $nombre=$_POST['seleccionar_usuario'];

  //eliminar la info de la base de datos
$conector->query("DELETE FROM usuario WHERE nombre='$nombre'");
}

header('Location: ../lista_usuarios.php');
?>
