<?php
require_once "../propiedades_pokemon/propiedades.php";

class Pacomon extends Propiedades
{
private $explicacion=10;
private $homosexualidad=-200;
  function __construct()
  {
    parent::setAtaque(999);
    parent::setVida(999);
    parent::setDefensa(999);
    parent::setVelocidad(999);
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

    public function getExplicacion()
    {
        return $this->explicacion;
    }

    public function setExplicacion($explicacion)
    {
        $this->explicacion = $explicacion;

        return $this;
    }

    public function getHomosexualidad()
    {
        return $this->homosexualidad;
    }

    public function setHomosexualidad($homosexualidad)
    {
        $this->homosexualidad = $homosexualidad;

        return $this;
    }
    function ataque1(){
      return $this->explicacion;
    }
    function ataque2(){
      return $this->homosexualidad;
    }

}

?>
