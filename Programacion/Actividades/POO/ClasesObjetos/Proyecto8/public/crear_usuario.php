<div class="" hidden>
  <?php
  //incluir el autoload
  require_once __DIR__.'/../vendor/autoload.php';
  //carga clase correspondiente
  use Proyecto8\models\BaseDatos;
  //crear una nueva conexion
  $consulta=new BaseDatos();

  $consulta->conectar();
  //si se envia, que ejecute la funcion de crear usuario
  if (isset($_POST["enviar"])){
    $consulta->crear_user($_POST['NombreUsuario'],$_POST['ApellidosUsuario'],$_POST['EdadUsuario'],$_POST['CursoUsuario'],$_POST['PuntuacionUsuario']);
  }
  ?>

</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="Crear";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Actualizar") echo "active";?>" href="actualizar_usuario.php">Actualizar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listado_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="" method="post"> <!-- formulario que actualiza a un usuario -->
        <h1>Crear Usuario</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Nombre</b></td>
              <td><input type="text" name="NombreUsuario" placeholder="Nombre"/></td>
            </tr>
            <tr>
              <td><b>Apellidos</b></td>
              <td><input type="text" name="ApellidosUsuario" placeholder="Apellidos"/></td>
            </tr>
            <tr>
              <td><b>Edad</b></td>
              <td><input type="text" name="EdadUsuario" placeholder="Edad"/></td>
            </tr>
            <tr>
              <td><b>Curso</b></td>
              <td><input type="text" name="CursoUsuario" placeholder="Curso"/></td>
            </tr>
            <tr>
              <td><b>Puntuacion</b></td>
              <td><input type="text" name="PuntuacionUsuario" placeholder="Puntuacion"/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit" name="enviar">Crear</button>
        <button type="reset">Restaurar</button>
      </form>
    </center>
  </body>
</html>
