<div class="" hidden>
  <?php
  //incluir el autoload
  require_once __DIR__.'/../vendor/autoload.php';
  //carga clase correspondiente
  use Proyecto8\models\BaseDatos;
  //crear una nueva conexion
  //crear una nueva conexion
  $consulta=new BaseDatos();

  $consulta->conectar();

  ?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/listado.css">
    <link rel="stylesheet" type="text/css" href="css/enlace_pag.css">
  </head>
  <body>
    <?php
      $pantalla="Lista";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listado_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <div id="lista">
      <?php
        $consulta->lista_usuarios();
      ?>
    </div>
  </body>
</html>
