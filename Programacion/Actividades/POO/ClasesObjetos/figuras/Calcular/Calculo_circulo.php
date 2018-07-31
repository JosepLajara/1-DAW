<?php
//calcula el área y perímetro de un círculo lamando a la clase
require '../crear_clases/crear_circulo.php';

$radio=$_POST["radio"];

$circulo1=new Circulo(1);
$circulo1->setDatos($radio);
$circulo1->calcularArea();
$circulo1->calcularPerimetro();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/tabla.css">
  </head>
  <body>
    <div class="padre">
      <form action="../formularios/formulario_circulo.php" method="post">
        <table width="100%"  border="1px">
        <tr id="tabla1" align="center">
            <td>Radio</td>
            <td>Perímetro</td>
            <td>Área</td>
        </tr>
          <tr id="tabla2">
            <center>
            <td id="lista1"><?php $circulo1->mostrarRadio();?></td>
            <td id="lista1"><?php $circulo1->mostrarPerimetro();?></td>
            <td id="lista1"><?php $circulo1->mostrarArea();?></td>
            </center>
          </tr>
        </table>
        <center>
          <br><br><br><br><br>
          <a href="../formularios/pantalla_inicial.php">Volver a formulario</a>
        </center>
      </form>
    </div>
  </body>
</html>
