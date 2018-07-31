
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
    $consulta->crear_user($_POST['NombreUsuario'],$_POST['CursoUsuario']);
  }
  ?>



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
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listado_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="" method="post"> <!-- formulario que actualiza a un usuario -->
        <h1>Crear Usuario</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Nombre</b></td>
              <td><input id="Nombre" type="text" name="NombreUsuario" placeholder="Nombre"/></td>
            </tr>
            <tr>
              <td><b>Curso</b></td>
              <td><input type="text" name="CursoUsuario" placeholder="Curso"/></td>
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
