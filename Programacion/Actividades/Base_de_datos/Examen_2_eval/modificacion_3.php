<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado usuarios</title>
  </head>
  <body>
    <?php
    $id= $_GET["id"];
      $conector = new mysqli("localhost","root","","programacion(5)");
      if ($conector->connect_errno){
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }else {
        $resultado=$conector->query("SELECT nombre FROM usuario WHERE id='".$id."'");
        foreach ($resultado as $fila) {
          echo "El usuario buscado es: ". $fila["nombre"];
        }
      }
    ?>
  </body>
</html>
