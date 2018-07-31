<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      $_SESSION=[];//cierra la sesión
      session_destroy();//destruye la sesión
    ?>
    <br><a href="mostrar.php">INICIO</a>
  </body>
</html>
