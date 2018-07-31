<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba Post</title>
  </head>
  <body>
    <?php
      $conector = new mysqli("localhost","root","","world");
      if ($conector->connect_errno){
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }else {
        $code=$_POST["code"];
        $continente=$_POST["continente"];

        $consulta="SELECT * FROM country WHERE code='$code' AND continent='$continente'";
        echo "<br>";
        echo $consulta;
        $resultado = $conector->query($consulta);
        foreach ($resultado as $fila) {
          echo "<br>E l país buscado es:".$fila["Name"];
        }
      }
    ?>

  </body>
</html>
