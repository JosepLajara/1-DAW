<?php
require_once "Calamardo.php";

$primerHeroe=new Calamardo();
$segundoHeroe=new Calamardo();
$segundoHeroe->restarVida(20);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Vida del primer héroe: ".$primerHeroe->getVida();
      echo "<br>";
      echo "Vida del segundo héroe: ".$segundoHeroe->getVida();
    ?>
  </body>
</html>
