<?php
require '../crear_clases/crear_circulo.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pag.css">
    <link rel="stylesheet" type="text/css" href="../css/formularios.css">
  </head>
  <body>
    <?php
      $pantalla="Circulo";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="Triangulo") echo "active";?>" href="formulario_triangulo.php">Triangulo</a></li>
      <li><a class="<?php if ($pantalla=="Circulo") echo "active";?>" href="formulario_circulo.php">Circulo</a></li>
      <li><a class="<?php if ($pantalla=="Cuadrado") echo "active";?>" href="formulario_cuadrado.php">Cuadrado</a></li>
    </ul>
    <center>
      <form class="header" action="../Calcular/Calculo_circulo.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Calcular el área de un circulo</h1>
        <div id="registro">
          <table>
            <tr>
              <td><b>Radio</b></td>
              <td><input name="radio" placeholder="Radio"/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Calcular</button>
      </form>
    </center>
  </body>
</html>
