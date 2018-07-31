<?php
//calcula el área y perímetro de un cuadrado lamando a la clase
require '../crear_clases/crear_cuadrado.php';

$lado=$_POST["lado"];

$cuadrado1=new Cuadrado(1);
$cuadrado1->setDatos($lado);
$cuadrado1->calcularArea();
$cuadrado1->calcularPerimetro();

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
            <td>Lado</td>
            <td>Perímetro</td>
            <td>Área</td>
        </tr>
          <tr id="tabla2">
            <center>
            <td id="lista1"><?php $cuadrado1->mostrarLado();?></td>
            <td id="lista1"><?php $cuadrado1->mostrarPerimetro();?></td>
            <td id="lista1"><?php $cuadrado1->mostrarArea();?></td>
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
