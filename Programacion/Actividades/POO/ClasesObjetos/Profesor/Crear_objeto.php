<?php
  /**
   *
   */
  class Profesor
  {
    //propiedades
    public $nombre="Josep";
    public $altura=1.73;
    public $peso=76;

    //funciones
    public function mostrar_datos()
    {
      echo "El profesor ".$this->nombre. " con los datos ".$this->altura."m, ".$this->peso."kg <br>";
      //echo $this->nombre Muestra una variable NECESARIO EL $THIS->nombre_variabe 
    }/*
    public function mostrarNombre()
    {
      return $this->nombre;
    }*/
  }

?>
