<?php
 /**
  *
  */
 class Triangulo
 {
   private $base=3;
   private $altura=5;
   private $area=0;
   private $perimetro=0;

   public function __construct($base,$altura)
   {
     $this->base=0;
     $this->altura=0;
   }

   public function setDatos($base,$altura)//funcion que le da valores a base y altura
   {
     $this->base=0;
     $this->altura=0;
     if($base && $altura>0)
     {
       $this->base=$base;
       $this->altura=$altura;
     }
   }
   public function calcularArea()//funcion que calcula el área de un triángulo
   {
     $this->area=($this->base*$this->altura)/2;
   }
   public function calcularPerimetro()//funcion que calcula el área de un triángulo
   {
     $this->perimetro=$this->base*3;
   }
   public function getDatos()//funcion que permite devolver los valores
   {
     return $this->base;
     return $this->altura;
     return $this->area;
     return $this->perimetro;
   }
   public function mostrarBase()//funcion que muestra los resultados
   {
     echo "La base ".$this->base."cm";
   }
   public function mostrarAltura()//funcion que muestra los resultados
   {
     echo "La altura ".$this->altura."cm";
   }
   public function mostrarArea()//funcion que muestra los resultados
   {
     echo "Dan resultado un área de ".$this->area."cm2";
   }
   public function mostrarPerimetro()//funcion que muestra los resultados
   {
     echo "Dan resultado un perímetro de ".$this->perimetro."cm";
   }
 }

?>
