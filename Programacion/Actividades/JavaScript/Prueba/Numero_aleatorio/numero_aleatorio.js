//saca numero aleatorio y muestra por html si ha acertado, num de intentos y el numero aleatorio

//variables

var contador=1;

var acierto;

//numero aleatorio

var aleatorio = Math.round(Math.random()*10);

var num_aleatorio=document.getElementById("aleatorio");
num_aleatorio.textContent = "El numero aleatorio es: "+aleatorio;  //muestra num aleatorio

var numero=0;
//control de errores

/*while (isNaN(numero)==true || numero>=11 || numero<=0) {

  numero=prompt("Por favor, introduce un número entre el 1 y el 10");

}*/

//programa
while (numero!=aleatorio) {

  var num_intentos=document.getElementById("num_intentos");  //muestra num de intentos
  num_intentos.textContent = "Numero de intentos: "+contador;

  numero=prompt('Introduce un número:');

  while (isNaN(numero)==true || numero>=11 || numero<=0) {

    numero=prompt("Por favor, introduce un número entre el 1 y el 10");

  }

  if(numero>aleatorio){
    acierto=document.getElementById("acertado");
    acierto.textContent = "Te has pasado";
  }else if (numero<aleatorio) {
    acierto=document.getElementById("acertado");
    acierto.textContent = "Te has quedado corto";
  }
  contador++;
}

if(numero=aleatorio){
  acierto=document.getElementById("acertado");
  acierto.textContent = "Has acertado";
}
