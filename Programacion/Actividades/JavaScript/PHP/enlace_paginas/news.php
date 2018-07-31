<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Noticias</title>
    <style>
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }
      li {
          float: left;
      }
      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      li a:hover:not(.active) {
        background-color: #121;
      }
      .active {
        background-color: #4CAF50;
      }
</style>
  </head>
  <body>
    <?php $pantalla="Noticias";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="home") echo "active";?>" href="home.php">Home</a></li>
      <li><a class="<?php if ($pantalla=="noticias") echo "active";?>" href="news.php">Noticias</a></li>
      <li><a class="<?php if ($pantalla=="contacto") echo "active";?>" href="contacto.php">Contacto</a></li>
    </ul>
    <h1>Prueba de Noticias</h1>
  </body>
</html>
