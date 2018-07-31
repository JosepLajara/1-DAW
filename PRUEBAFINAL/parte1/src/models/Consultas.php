<?php

namespace Proyecto8\models;

class consultas extends BaseDatos 
{
	function listado_usuarios(){
    $lista=$this->conector->query('SELECT nombre,id FROM usuarios');
    foreach ($lista as $fila) {
      echo "<option value='";
      echo $fila['id'];
      echo "'>";
      echo $fila['id'];
      echo "</option>";
    }
  }

  function lista_usuarios(){
    $listado=$this->conector->query("SELECT * FROM usuarios");
    echo "<div id='lista'>";
    echo "<ol id='lista2'>";
    foreach ($listado as $fila) {
      echo "<li>";
      echo "USUARIO: ". $fila["nombre"]." ". $fila["apellidos"]." Año de nacimiento: ". $fila["edad"]. " Curso: ".$fila["curso"]." Puntuacion: ".$fila["puntuacion"]." ID: ".$fila["id"]."<br>";
    }
    echo "</ol>";
    echo "</div>";
  }

  function actualizar_user($usuario_update,$nombre,$apellidos,$edad,$curso,$puntuacion){
    $this->conector->query("UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', edad='$edad', curso='$curso', puntuacion='$puntuacion' WHERE id='$usuario_update'");
    header('Location: actualizar_usuario.php');

  }

  function crear_user($id,$nombre,$apellidos,$edad,$curso,$puntuacion){
    $this->conector->query("INSERT INTO usuarios VALUES ('','$nombre','$apellidos','','',$edad,$curso,$puntuacion,'')") or die("<h3>Error de envio</h3>");
    echo '<h2>Registro completo</h2>';
    header('Location: crear_usuario.php');
  }

  function eliminar_user($id){
    $this->conector->query("DELETE FROM usuarios WHERE id='$id'");
    echo $nombre;
    header('Location: eliminar_usuario.php');
  }

}

?>