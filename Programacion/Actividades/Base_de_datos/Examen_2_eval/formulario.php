<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="stylesheet" type="text/css" href="enlace_paginas.css">
  </head>
  <body>
    <?php
      $pantalla="Registro";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Get") echo "active";?>" href="modificacion_3_get.php">Get</a></li>
      <li><a class="<?php if ($pantalla=="Registro") echo "active";?>" href="formulario.php">Registro</a></li>
      <li><a class="<?php if ($pantalla=="Usuarios") echo "active";?>" href="listado_usuarios.php">Usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="insertarUsuario.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Formulario de registro</h1>
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
              <td><b>E-mail</b></td>
              <td><input type="text" name="Email" placeholder="E-mail"/></td>
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
        <button type="submit">Registrarse</button>
        <button type="submit">Restaurar</button>
        <div hidden class="error"><h3>No se han llenado todos los campos<h3></h3></div>
      </form>
    </center>

    </script>
  </body>
</html>
