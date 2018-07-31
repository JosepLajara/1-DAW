<!DOCTYPE html>
<html>
<head>
<title>Continente</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Create two unequal columns that floats next to each other */
.column {
    float: left;
    height: 30px; /* Should be removed. Only for demonstration */
}

.left {
  width: 40%;
}

.right {
  width: 60%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
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
  <?php
    $pantalla="Continente";
  ?>
  <ul>
    <li><a class="<?php if ($pantalla=="Superficie") echo "active";?>" href="Pais_superficie.php">Superficie</a></li>
    <li><a class="<?php if ($pantalla=="Continente") echo "active";?>" href="Pais_continente.php">Continente</a></li>
    <li><a class="<?php if ($pantalla=="Independencia") echo "active";?>" href="Pais_independencia.php">Independencia</a></li>
    <li><a class="<?php if ($pantalla=="Paises") echo "active";?>" href="Pagina_Principal.php">Paises</a></li>
  </ul>
  <h1>En esta web se mostraran los países ordenados por continente</h1>
  <?php
  $base_datos = new mysqli("localhost","root","","world");
  if ($base_datos->connect_errno){
    echo "Fallo al conectar a MySQL: " . $base_datos->connect_error;
  }else {
    $resultado=$base_datos->query('SELECT * FROM country ORDER BY Continent');
    foreach ($resultado as $fila){ //lo mismo que while pero con foreach
  ?>
      <div class="row">
        <div class="column left">
          <?=$fila["Name"]?>
        </div>
        <div class="column right">
          <?=$fila["Continent"]?>
        </div>
      </div>
      <?php
    }
  }
      ?>
</body>
</html>
