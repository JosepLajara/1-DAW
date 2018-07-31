<?php
namespace Proyecto8\models;
use mysqli;
/**
 *
 */
class BaseDatos
{
  private $direccion;
  private $usuario;
  private $pass;
  private $db;
  private $conector;

  function __construct()
  {
    $this->direccion="localhost";
    $this->usuario="root";
    $this->pass="";
    $this->db="programacion(5)";
  }
  function conectar(){
    $conector_= new mysqli ($this->direccion,$this->usuario,$this->pass,$this->db) ;
    if ($conector_->connect_errno)
    {
      $this->conector=false;
    }
    else
    {
      $this->conector=$conector_;
    }
  }
  function listado_usuarios(){
    $lista=$this->conector->query('SELECT nombre FROM usuario');
    foreach ($lista as $fila) {
      echo "<option value='";
      echo $fila['nombre'];
      echo "'>";
      echo $fila['nombre'];
      echo "</option>";
    }
  }

  function lista_usuarios(){
    $listado=$this->conector->query("SELECT * FROM usuario");
    echo "<div id='lista'>";
    echo "<ol id='lista2'>";
    foreach ($listado as $fila) {
      echo "<li>";
      echo "USUARIO: ". $fila["nombre"]." ". $fila["apellidos"]." ". $fila["edad"]." años ". "Curso: ".$fila["curso"]."<br>";
    }
    echo "</ol>";
    echo "</div>";
  }

  function actualizar_user($usuario_update,$nombre,$apellidos,$edad,$curso,$puntuacion){
    $this->conector->query("UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', edad='$edad', curso='$curso', puntuacion='$puntuacion' WHERE nombre='$usuario_update'");
    header('Location: actualizar_usuario.php');
    echo $usuario_update;
    echo $nombre;
    echo $apellidos;
    echo $edad;
    echo $curso;
    echo $puntuacion;

  }

  function crear_user($nombre,$apellidos,$edad,$curso,$puntuacion){
    $this->conector->query("INSERT INTO usuario VALUES ('','$nombre','$apellidos','$edad','$curso','$puntuacion')") or die("<h3>Error de envio</h3>");
    echo '<h2>Registro completo</h2>';
    header('Location: crear_usuario.php');
  }

  function eliminar_user($nombre){
    $this->conector->query("DELETE FROM usuario WHERE nombre='$nombre'");
    echo $nombre;
    header('Location: eliminar_usuario.php');
  }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function getConector()
    {
        return $this->conector;
    }

    public function setConector($conector)
    {
        $this->conector = $conector;

        return $this;
    }

}

 ?>
