<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" type="text/css" href="listado_usuarios.css">
    <link rel="stylesheet" type="text/css" href="enlace_paginas.css">
  </head>
  <body>
    <?php
      $pantalla="Usuarios";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Get") echo "active";?>" href="modificacion_3_get.php">Get</a></li>
      <li><a class="<?php if ($pantalla=="Registro") echo "active";?>" href="formulario.php">Registro</a></li>
      <li><a class="<?php if ($pantalla=="Usuarios") echo "active";?>" href="listado_usuarios.php">Usuarios</a></li>
    </ul>
    <div id="lista">
      <?php
        $conector = new mysqli("localhost","root","","programacion(5)");
        if ($conector->connect_errno){
          echo "Fallo al conectar a MySQL: " . $conector->connect_error;
        }else {
          $consulta=$conector->query('SELECT * FROM usuario');
            ?>
            <ol id="lista2">
              <?php
              foreach ($consulta as $fila) {
              ?>
                <li>
                  <?php
                    echo "<b>Nombre: </b> ".$fila["nombre"]." <b>Correo: </b>".$fila["correo"]."<br>";
                  ?>
                </li>
                <?php
                }
                ?>
            </ol>
            <?php
        }
      ?>
    </div>
  </body>
</html>
