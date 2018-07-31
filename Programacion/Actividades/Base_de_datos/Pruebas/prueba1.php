<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
    <style media="screen">

    </style>
  </head>
  <body>
    <h1 >prueba</h1>

    <?php
      $conector = new mysqli("localhost","root","","world");
      if ($conector->connect_errno){
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }else {
        echo "<h1>Paises del mundo</h1>";
        $resultado = $conector->query("SELECT * FROM country");

        /* WHILE
      while($fila=$resultado->fetch_assoc()){//este while imprime las filas(si es un valor hay que ponerlo entra corchete como es este caso)
        echo "-".$fila['Name']."<br>";
      }

      */
      foreach ($resultado as $fila){ //lo mismo que while pero con foreach
        echo "<li>Pais: ".$fila["Name"]."</li>";
      }

      }
    ?>
  </body>
</html>
