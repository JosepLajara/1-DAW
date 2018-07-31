<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="enlace_paginas.css">
  </head>
  <body>
    <?php
      $pantalla="Get";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Get") echo "active";?>" href="modificacion_3_get.php">Get</a></li>
      <li><a class="<?php if ($pantalla=="Registro") echo "active";?>" href="formulario.php">Registro</a></li>
      <li><a class="<?php if ($pantalla=="Usuarios") echo "active";?>" href="listado_usuarios.php">Usuarios</a></li>
    </ul>
    <a href="modificacion_3.php?id=7">Click aquí para buscar el usuario con el id 7</a>
  </body>
</html>
