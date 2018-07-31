<?php
//codigo php que conecta con la base de datos
  $conector = new mysqli("localhost","root","","programacion(5)");
  if ($conector->connect_errno){
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
  }else {
    //almacenar en variables los datos recogidos
    $nombre=$_POST['NombreUsuario'];
    $correo=$_POST['Email'];
    $apellidos=$_POST['ApellidosUsuario'];
    $edad=$_POST['EdadUsuario'];
    $curso=$_POST['CursoUsuario'];
    $puntuacion=$_POST['PuntuacionUsuario'];

    //comprobar que todos los campos de han llenado

    $llenado=(strlen($nombre)*strlen($apellidos)*strlen($edad)*strlen($curso)*strlen($puntuacion)*strlen($correo)) or die("<center>
    <h3>No se han llenado todos los campos <br> <a href='login.php'>Volver a la página de registro</a></h3>
    </center>");

    //añadir la info a la base de datos
    $conector->query("INSERT INTO usuario VALUES ('','$nombre','$apellidos','$edad','$curso','$puntuacion','$correo')") or die("<h3>Error de envio</h3>");
    echo '<h2>Registro completo</h2>';
  }

header('Location: formulario.php');//te lleva de vuelta a la página de registro
?>
