<?php
require_once "../propiedades_pokemon/propiedades.php";

class Regimon extends Propiedades
{
private $mac=50;
private $windows=-90;
  function __construct()
  {
    parent::setAtaque(100);
    parent::setVida(400);
  }

    public function getMac()
    {
        return $this->mac;
    }

    public function setMac($mac)
    {
        $this->mac = $mac;
    }

    public function getWindows()
    {
        return $this->windows;
    }

    public function setWindows($windows)
    {
        $this->windows = $windows;

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
      return $this->mac;
    }
    function ataque2(){
      return $this->windows;
    }
}

?>
