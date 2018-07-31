<?php
use Lib\Universidad\Alumno as Alumno;
use Lib\Universidad\Profesor as P;
require_once "/lib/Alumno.php";
require_once "/lib/Profesor.php";

//Nuevo Alumno
$alumno1=new Alumno();
$alumno1->setNombre("Salva");
$alumno1->setApodo("El Mohicano");

$profesor1=new P();
$profesor1->setNombre("Paco");
$profesor1->setApodo("El chupas");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando Namespace</title>
  </head>
  <body>
    <h1>Alumno DAW</h1>
    <p>El nombre del alumno es: <b><?php echo $alumno1->getNombre() ?></b></p>
    <p>El apodo del alumno es: <b><?php echo $alumno1->getApodo() ?></b></p>
  </body>
  <body>
    <h1>Profesor DAW</h1>
    <p>El nombre del profesor es: <b><?php echo $profesor1->getNombre() ?></b></p>
    <p>El apodo del profesor es: <b><?php echo $profesor1->getApodo() ?></b></p>
  </body>
</html>
