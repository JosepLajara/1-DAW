<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises</title>
    <!-- copia de w3schools -->
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
    <?php $pantalla="Paises";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="Superficie") echo "active";?>" href="Pais_superficie.php">Superficie</a></li>
      <li><a class="<?php if ($pantalla=="Continente") echo "active";?>" href="Pais_continente.php">Continente</a></li>
      <li><a class="<?php if ($pantalla=="Independencia") echo "active";?>" href="Pais_independencia.php">Independencia</a></li>
      <li><a class="<?php if ($pantalla=="Paises") echo "active";?>" href="Pagina_Principal.php">Paises</a></li>
    </ul>
    <h1>En esta web se mostraran los países ordenados por orden alfabético</h1>
    <?php
      $base_datos = new mysqli("localhost","root","","world");
      if ($base_datos->connect_errno){
        echo "Fallo al conectar a MySQL: " . $base_datos->connect_error;
      }else {
        $resultado=$base_datos->query('SELECT * FROM country');
        foreach ($resultado as $fila){ //lo mismo que while pero con foreach
          echo "-".$fila["Name"]."<br>";
        }
      }
    ?>
  </body>
</html>
