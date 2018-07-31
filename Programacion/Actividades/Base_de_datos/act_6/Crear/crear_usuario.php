<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="Crear";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="../Crear/crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="../Eliminar/eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="../lista_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="crear_usuario1.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Registrar usuario</h1>
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
        <button type="submit">Registrarse</button>
        <button type="reset">Restaurar</button>
      </form>
    </center>

  </body>
</html>
