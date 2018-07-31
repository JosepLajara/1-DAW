<?php

$conector = new mysqli("localhost","root","","programacion(5)");
if ($conector->connect_errno){
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else {
  //almacenar en variables los datos recogidos
  $usuario_update=$_POST['seleccionar_usuario'];
  $nombre=$_POST['NombreUsuario'];
  $apellidos=$_POST['ApellidosUsuario'];
  $edad=$_POST['EdadUsuario'];
  $curso=$_POST['CursoUsuario'];
  $puntuacion=$_POST['PuntuacionUsuario'];
  //eliminar la info de la base de datos

echo "usuario_update ".$usuario_update." nombre ".$nombre." apellidos ".$apellidos." edad ".$edad." curso ".$curso." puntuacion ".$puntuacion;

$conector->query("UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', edad='$edad', curso='$curso', puntuacion='$puntuacion' WHERE nombre='$usuario_update'");

}
header('Location: ../lista_usuarios.php');
?>
