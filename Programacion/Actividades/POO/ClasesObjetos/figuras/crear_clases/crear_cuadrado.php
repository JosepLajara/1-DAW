<?php

 class Cuadrado
 {
   private $lado=2;
   private $area=0;
   private $perimetro=0;

   function __construct($lado)
   {
     $this->lado=0;
   }
   public function setDatos($lado)
   {
     $this->lado=0;
     if($lado>0)
     {
       $this->lado=$lado;
     }
   }
   public function calcularArea()
   {
     $this->area=($this->lado*$this->lado);
   }
   public function calcularPerimetro()
  {
    $this->perimetro=(4*$this->lado);
  }
  public function getDatos()
  {
    return $this->perimetro;
    return $this->area;
    return $this->lado;
  }
  public function mostrarArea()
  {
    echo "El area es: ".$this->area."cm2";
  }
  public function mostrarLado()
  {
    echo "El lado es: ".$this->lado."cm";
  }
  public function mostrarPerimetro()
  {
    echo "El perímetro es: ".$this->perimetro."cm";
  }
 }

?>
