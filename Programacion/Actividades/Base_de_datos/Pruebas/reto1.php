<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura Sudamerica</title>
  </head>
  <body>
    <?php
      $base_datos = new mysqli("localhost","root","","world");
      if ($base_datos->connect_errno){
        echo "Fallo al conectar a MySQL: " . $base_datos->connect_error;
      }else {
        echo "<h1>Paises del mundo</h1>";
        $resultado=$base_datos->query('SELECT Name FROM country where Continent="South America"');
        foreach ($resultado as $fila){ //lo mismo que while pero con foreach
          echo "<li>Pais: ".$fila["Name"]."</li>";
        }
      }
    ?>
  </body>
</html>
