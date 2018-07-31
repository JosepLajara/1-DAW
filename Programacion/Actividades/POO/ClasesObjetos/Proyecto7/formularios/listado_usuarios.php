<div class="" hidden>
  <?php
  //crear una nueva conexion
  require_once "../Conexion/modelo.php";
  $consulta=new BaseDatos();

  $consulta->conectar();

  ?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../css/listado.css">
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
  </head>
  <body>
    <?php
      $pantalla="Lista";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Actualizar") echo "active";?>" href="actualizar_usuario.php">Actualizar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listado_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <div id="lista">
      <?php
        $consulta->lista_usuarios();
      ?>
    </div>
  </body>
</html>
