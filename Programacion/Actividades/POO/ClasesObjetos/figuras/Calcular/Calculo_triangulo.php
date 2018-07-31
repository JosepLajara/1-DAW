<?php
//calcula el área y perímetro de un triangulo lamando a la clase
require '../crear_clases/crear_triangulo.php';

$base=$_POST["base"];
$altura=$_POST["altura"];

$triangulo1=new Triangulo(5,4);
$triangulo1->setDatos($base,$altura);
$triangulo1->calcularArea();

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
            <td>Base</td>
            <td>Altura</td>
            <td>Área</td>
            <td>Perímetro</td>
        </tr>
          <tr id="tabla2">
            <center>
            <td id="lista1"><?php $triangulo1->mostrarBase();?></td>
            <td id="lista1"><?php $triangulo1->mostrarAltura();?></td>
            <td id="lista1"><?php $triangulo1->mostrarArea();?></td>
            <td id="lista1"><?php $triangulo1->mostrarPerimetro();?></td>
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
