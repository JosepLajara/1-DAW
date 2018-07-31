<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado usuarios</title>
  </head>
  <body>
    <?php
      $conector = new mysqli("localhost","root","","world");
      if ($conector->connect_errno){
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }else {
        $resultado=$conector->query("SELECT * FROM country WHERE Code='".$code."'");
        foreach ($resultado as $fila) {
          echo "El país buscado es: ". $fila["Name"];
        }
      }
    ?>
  </body>
</html>
