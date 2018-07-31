<?php
/**
 *
 */
class Propiedades
{
  private $vida=200;
  private $ataque=30;
  private $defensa=20;
  private $velocidad=10;

  function __construct()
  {

  }
    public function getVida()
    {
        return $this->vida;
    }
    public function setVida($vida)
    {
        $this->vida = $vida;
    }
    public function getAtaque()
    {
        return $this->ataque;
    }
    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;

        return $this;
    }
    public function getDefensa()
    {
        return $this->defensa;
    }
    public function setDefensa($defensa)
    {
        $this->defensa = $defensa;

        return $this;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }
    public function getCura()
    {
        return $this->cura;
    }
    public function setCura($cura)
    {
        $this->cura = $cura;

        return $this;
    }
    public function getPlacaje()
    {
        return $this->placaje;
    }
    public function setPlacaje($placaje)
    {
        $this->placaje = $placaje;

        return $this;
    }
}

?>
