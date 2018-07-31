<?php
require_once "../pokemons/pacomon.php";

$paco1=new Pacomon();

?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="Pokemon3";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Pokemon1") echo "active";?>" href="personaje1.php">Pokemon1</a></li>
      <li><a class="<?php if ($pantalla=="Pokemon2") echo "active";?>" href="personaje2.php">Pokemon2</a></li>
      <li><a class="<?php if ($pantalla=="Pokemon3") echo "active";?>" href="Personaje3.php">Pokemon3</a></li>
      <li><a class="<?php if ($pantalla=="Ataques") echo "active";?>" href="Ataques.php">Ataques</a></li>
    </ul>
    <center>
      <form class="header" action="crear_usuario1.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Pacomon</h1>
        <img src="../imagenes/Feebas.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Stats</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $paco1->mostrarVida();?></span></td>
            <tr>
              <td><b>Ataque</b></td>
              <td><span class="label label-default"><?php echo $paco1->mostrarAtaque();?></span></td>
            </tr>
            <tr>
              <td><b>Defensa</b></td>
              <td><span class="label label-default"><?php echo $paco1->mostrarDefensa();?></span></td>
            </tr>
            <tr>
              <td><b>Velocidad &nbsp&nbsp;</b></td>
              <td><span class="label label-default"><?php echo $paco1->mostrarVelocidad();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Explicacion </b></td>
              <td><span class="label label-default"><?php echo $paco1->ataque1();?></span></td>
            </tr>
            <tr>
              <td><b>Homosexualidad &nbsp&nbsp&nbsp&nbsp;</b></td>
              <td><span class="label label-default"><?php echo $paco1->ataque2();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>

  </body>
</html>
