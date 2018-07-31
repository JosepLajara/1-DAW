<?php
require_once "db.php";

class Table
{
  private $db;
  function __construct($server,$user,$pass,$db)
  {
    $db=new db($server,$user,$pass,$db);
    $this->conector=$this->db->conectar();
  }

  public function findAll($tabla){
    $consulta="SELECT * FROM $tabla";
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }

  public function find($query){
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }
}


?>
