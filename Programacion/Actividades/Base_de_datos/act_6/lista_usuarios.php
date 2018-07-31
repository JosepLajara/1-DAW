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
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="Crear/crear_usuario.php">Crear</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="Eliminar/eliminar_usuario.php">Eliminar</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="lista_usuarios.php">Lista de usuarios</a></li>
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
                    echo "USUARIO: ". $fila["nombre"]." ". $fila["apellidos"]." ". $fila["edad"]." años ". "Curso: ".$fila["curso"]."<br>";
                  ?>
                  <form class="" action="Eliminar/eliminar_usuario1.php" method="post">
                    <button id="delete" value="Borrar" type="submit"><img src="images/delete.png" width="20" height="20"/> Eliminar</button>
                    <input type="hidden" name="seleccionar_usuario" value="<?php echo $fila['nombre']?>">
                  </form>
                  <form class="" action="Actualizar/actualizar_usuario.php" method="post">
                    <button id="update" type="submit"><img src="images/update.png" width="20" height="20" /> Actualizar</button>
                    <input type="hidden" name="nombre_user" value="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="apellidos_user" value="<?php echo $fila['apellidos']?>">
                    <input type="hidden" name="edad_user" value="<?php echo $fila['edad']?>">
                    <input type="hidden" name="curso_user" value="<?php echo $fila['curso']?>">
                    <input type="hidden" name="puntuacion_user" value="<?php echo $fila['puntuacion']?>">
                  </form>
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
