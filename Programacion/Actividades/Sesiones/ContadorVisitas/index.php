<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION['pag'])) {//contador de visitas
        $_SESSION['pag'] = 0;
      } else {
        $_SESSION['pag']++;
      }
      echo "El numero de veces visitado es: ".$_SESSION['pag'];
    ?>
  </body>
</html>
