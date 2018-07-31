<?php //ESTE PROGRAMA IMPRIME LOS 10 PRIMEROS NUMEROS PARES?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Imprimir num pares</title>
  </head>
  <body>
    <h1>10 primeros numeros pares</h1>
    <?php
      for($i=2; $i<=20; $i=$i+2){
        echo ($i);
        echo "<br>";
      }
    ?>
    </body>
</html>
