<?php
require_once "../propiedades_pokemon/propiedades.php";

class Sergiogay extends Propiedades
{
private $patitas=30;
private $mirarRepositorio=-30;
  function __construct()
  {
    parent::setAtaque(1);
    parent::setDefensa(5);
    parent::setVelocidad(-3);
  }

    public function getChupar()
    {
        return $this->chupar;
    }

    public function setChupar($patitas)
    {
        $this->patitas = $patitas;

        return $this;
    }

    public function getMirarRepositorio()
    {
        return $this->mirarRepositorio;
    }

    public function setMirarRepositorio($mirarRepositorio)
    {
        $this->mirarRepositorio = $mirarRepositorio;

        return $this;
    }
    function mostrarVida(){
      return parent::getVida();
    }
    function mostrarAtaque(){
      return parent::getAtaque();
    }
    function mostrarDefensa(){
      return parent::getDefensa();
    }
    function mostrarVelocidad(){
      return parent::getVelocidad();
    }
    function ataque1(){
      return $this->patitas;
    }
    function ataque2(){
      return $this->mirarRepositorio;
    }


}

?>
