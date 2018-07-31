<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION['username'])) {
        $_SESSION['username'] = "Josep";
        $_SESSION['id'] = 13;
      }
      echo "El usuario es ".$_SESSION['username'];
    ?>
    <br><a href="mostrar.php">Mostrar</a>
    <br><a href="logout.php">Desloguearse</a>
  </body>
</html>
