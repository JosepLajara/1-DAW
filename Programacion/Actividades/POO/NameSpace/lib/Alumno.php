<?php
namespace Lib\Universidad;
/**
 *
 */
class Alumno
{
  private $nombre="";
  private $apodo="";

  function __construct()
  {

  }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApodo()
    {
        return $this->apodo;
    }

    public function setApodo($apodo)
    {
        $this->apodo = $apodo;

        return $this;
    }

}


?>
