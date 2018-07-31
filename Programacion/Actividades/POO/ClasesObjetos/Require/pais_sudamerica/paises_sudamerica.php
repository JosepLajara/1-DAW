<?php
require '../plantillas/plantilla_bbdd.php';
require '../plantillas/variables_bbdd.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    foreach ($resultado as $fila){ //imprime los paises
      echo $fila["Name"]." ".$fila["Region"]."<br>";
    }
    ?>
  </body>
</html>
