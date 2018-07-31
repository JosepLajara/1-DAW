<?php
 /**
  *
  */
 class Circulo
 {
   private $perimetro=0;
   private $area=0;
   private $radio=2;
   function __construct($radio)
   {
     $this->radio=0;
   }
   public function setDatos($radio){
     $this->$radio=0;
     if($radio>0)
     {
       $this->radio=$radio;
     }
   }
   public function calcularArea()
   {
     $this->area=3.14*pow($this->radio,2);
   }
   public function calcularPerimetro()
  {
    $this->perimetro=(2*3.14)*$this->radio;
  }
  public function getDatos()
  {
    return $this->perimetro;
    return $this->area;
    return $this->radio;
  }
  public function mostrarRadio()
  {
    echo "El radio es ".$this->radio."cm";
  }
  public function mostrarPerimetro()
  {
    echo "El perímetro es: ".$this->perimetro."cm";
  }
  public function mostrarArea()
  {
    echo "El area es: ".$this->area."cm2";
  }
 }

?>
