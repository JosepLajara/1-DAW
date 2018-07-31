<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      echo "El usuario es ".$_SESSION['username'];
    ?>
    <br><a href="index.php">INICIO</a>
  </body>
</html>
