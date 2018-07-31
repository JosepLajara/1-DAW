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
      $pantalla="Eliminar";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="../Crear/crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="../Eliminar/eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="../lista_usuarios.php">Lista de usuarios</a></li>
    </ul>
    <center>
      <form class="header" action="eliminar_usuario1.php" method="post"> <!-- formulario que elimina a un usuario -->
        <h1>Eliminar Usuario</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Usuario</b></td>
              <td>
                <select id="seleccionar_usuario" name="seleccionar_usuario">
                  <?php
                    $conector = new mysqli("localhost","root","","programacion(5)");
                    if ($conector->connect_errno){
                      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
                    }else {
                      $consulta=$conector->query('SELECT nombre FROM usuario');
                      ?>
                      <ol id="lista2" name="UsuarioEliminar">
                        <?php
                        foreach ($consulta as $fila) {
                        ?>
                          <option>
                            <?php
                              echo $fila["nombre"]."<br>";
                            ?>
                          </option>
                          <?php
                          }
                          ?>
                      </ol>
                      <?php
                    }
                  ?>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Eliminar</button>
      </form>
    </center>
  </body>
</html>
