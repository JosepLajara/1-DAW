
<!DOCTYPE html>
<html>
<head>
<title>Superficie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
  <?php
    $pantalla="Superficie";
  ?>
  <ul>
    <li><a class="<?php if ($pantalla=="Superficie") echo "active";?>" href="Pais_superficie.php">Superficie</a></li>
    <li><a class="<?php if ($pantalla=="Continente") echo "active";?>" href="Pais_continente.php">Continente</a></li>
  </ul>
  <h1>En esta web se mostraran los países ordenados por superficie</h1>

  <div id="grafico" style="height: 250px;"><!-- este es el contenedor que contiene el gráfico -->

  </div>
      <script type="text/javascript" src="prueba_morris.js"></script>
</body>
</html>
