<?php
/**
 *
 */
class Personaje
{
  private $vida=100;

  function __construct()
  {

  }
  //getters y setters
  public function setVida($vida){
    $this->vida=$vida;
  }
  public function getVida(){
    return $this->vida;
  }
  //Resta vida

  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}

?>
