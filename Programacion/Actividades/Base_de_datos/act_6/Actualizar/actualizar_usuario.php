<?php
  $name=$_POST['nombre_user'];
  $surname=$_POST['apellidos_user'];
  $age=$_POST['edad_user'];
  $grade=$_POST['curso_user'];
  $points=$_POST['puntuacion_user'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../css/lista.css">
  </head>
  <body>
    <?php
      $pantalla="Actualizar";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="../Crear/crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Actualizar") echo "active";?>" href="../Actualizar/actualizar_usuario.php">Actualizar</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="../Eliminar/eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="../lista_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="actualizar_usuario1.php" method="post"> <!-- formulario que actualiza a un usuario -->
        <h1>Actualizar Usuario</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Usuario</b></td>
              <td>
                <select disabled id="seleccionar_usuario" name="seleccionar_usuario">
                  <?php
                    $conector = new mysqli("localhost","root","","programacion(5)");
                    if ($conector->connect_errno){
                      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
                    }else {
                      $consulta=$conector->query('SELECT * FROM usuario');
                      ?>
                      <ol id="lista2">
                          <option>
                            <?php
                              echo $name."<br>";
                            ?>
                          </option>
                      </ol>
                      <?php
                    }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Nombre</b></td>
              <td><input type="text" name="NombreUsuario" value='<?php echo $name ?>'/></td>
            </tr>
            <tr>
              <td><b>Apellidos</b></td>
              <td><input type="text" name="ApellidosUsuario" value='<?php echo $surname ?>'/></td>
            </tr>
            <tr>
              <td><b>Edad</b></td>
              <td><input type="text" name="EdadUsuario" value='<?php echo $age ?>'/></td>
            </tr>
            <tr>
              <td><b>Curso</b></td>
              <td><input type="text" name="CursoUsuario" value='<?php echo $grade ?>'/></td>
            </tr>
            <tr>
              <td><b>Puntuacion</b></td>
              <td><input type="text" name="PuntuacionUsuario" value='<?php echo $points ?>'/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Actualizar</button>
        <button type="reset">Restaurar</button>
      </form>
    </center>
  </body>
</html>
