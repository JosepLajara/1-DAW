<?php
require_once "../pokemons/sergiogay.php";
require_once "../pokemons/Regimon.php";
require_once "../pokemons/pacomon.php";

$sergio2=new Sergiogay();
$regimon2=new Regimon();
$paco2=new Pacomon();

?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="../css/ataques.css">
  </head>
  <body>
    <?php
      $pantalla="Ataques";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Pokemon1") echo "active";?>" href="personaje1.php">Pokemon1</a></li>
      <li><a class="<?php if ($pantalla=="Pokemon2") echo "active";?>" href="personaje2.php">Pokemon2</a></li>
      <li><a class="<?php if ($pantalla=="Pokemon3") echo "active";?>" href="Personaje3.php">Pokemon3</a></li>
      <li><a class="<?php if ($pantalla=="Ataques") echo "active";?>" href="Ataques.php">Ataques</a></li>
    </ul>
    <div id="cuerpo">
      <center>
        <h1>Información Ataques</h1>
      </center>
      <ol id="lista2">
        <li><span class="label label-default"><b>Mac:</b> Lanza un mac a la cabeza de su enemigo e inflige <?php echo $regimon2->ataque1();?> puntos de daño </span></li>
        <li><span class="label label-default"><b>Windows:</b> Inicia un ordenador con windows y se inflige <?php echo $regimon2->ataque2();?> puntos de daño </span></li>
        <li><span class="label label-default"><b>Chupar:</b> Intento de chupartela: inflige  <?php echo $sergio2->ataque1();?> puntos de daño </span></li>
        <li><span class="label label-default"><b>Mirar Repositorio:</b> Mira los repositorios de los compañeros para hacer los trabajos pero encuentra que no esta subido y se inflige <?php echo $sergio2->ataque1();?> puntos de daño </span></li>
        <li><span class="label label-default"><b>Explicacion</b> Realiza una explicacion de php e inflige  <?php echo $paco2->ataque1();?> puntos de daño </span></li>
        <li><span class="label label-default"><b>Homosexualidad</b> Se te acerca por detras sigilosamente y se inflige <?php echo $paco2->ataque2();?> puntos de daño </span></li>
      </ol>
    </div>
  </body>
</html>
