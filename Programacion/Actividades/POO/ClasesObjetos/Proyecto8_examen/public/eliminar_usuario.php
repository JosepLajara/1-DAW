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
  if (isset($_POST["eliminar"])){
    $consulta->eliminar_user($_POST['seleccionar_usuario']);
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
    <link rel="stylesheet" type="text/css" href="css/lista.css">
  </head>
  <body>
    <?php
      $pantalla="Eliminar";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Actualizar") echo "active";?>" href="actualizar_usuario.php">Actualizar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listado_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="" method="post"> <!-- formulario que elimina a un usuario -->
        <h1>Eliminar Usuario</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Usuario</b></td>
              <td>
                <select id="seleccionar_usuario" name="seleccionar_usuario">
                  <?php
                    $consulta->listado_usuarios();
                  ?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit" name="eliminar">Eliminar</button>
      </form>
    </center>
  </body>
</html>
