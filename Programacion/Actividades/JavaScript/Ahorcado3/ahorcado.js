//programa que simula el juego del ahorcado
//Josep Lajara Puchalt
//funciones
function comprobar_letra(letra_introducida,letras_usadas){
  for(i=0;i<letras_usadas.length;i++){
    if(letra_introducida==letras_usadas[i]){
      return true;
    }
  }
}
//variables-Arrays
var palabras=["television","pollo","telefono","atractivo","ordenador","gato","cargador","raton","pizarra","silla","pelicula","tecla","ventana","pared","celulosa","moto"];
var letras_usadas=[];
var numero_letras;
var letras_acertadas=-1;
const INTENTOS=11;
var contador=1;
var encontrada=false;
//selecciona una palabra

var aleatorio = Math.round(Math.random()*palabras.length);
var palabra_aleatoria = palabras[aleatorio];
//muestra la palabra aleatoria
console.log(palabra_aleatoria);
//almacena en un array las letras de la palabra
var letras_palabra = new Array(palabra_aleatoria.length);

for (var i=0;i<palabra_aleatoria.length;i++) {
  letras_palabra[i]=palabra_aleatoria.charAt(i);
  numero_letras=i;//cuenta las letras que tiene la palabra
}
//almacena en un array la palabra en espacios en blanco
var espacios_palabra = new Array(palabra_aleatoria.length);

for (var j=0;j<palabra_aleatoria.length;j++) {
  espacios_palabra[j]="_";
}
//ejecuta el programa mientras le queden INTENTOS
while(contador<INTENTOS){
  var letra_introducida=prompt([espacios_palabra]+"\nNumero de letras:"+(numero_letras+1)+"\nEl numero de INTENTOS restantes es :"+(INTENTOS-contador)+"\nLas letras usadas son: "+[letras_usadas]+"\nIntroduzca una letra por favor");//introduce letra y dice numero de INTENTOS restantes
//  letras_usadas.push(letra_introducida);
  while (letra_introducida.length > 1 || isNaN(letra_introducida)==false) { //comrpueba si es una letra
      alert("El valor introducido no es una letra");
      letra_introducida=prompt([espacios_palabra]+"\nNumero de letras:"+(numero_letras+1)+"\n"+"El numero de INTENTOS restantes es :"+(INTENTOS-contador)+"\nLas letras usadas son: "+[letras_usadas]+"\nIntroduzca una letra por favor")
      while(comprobar_letra(letra_introducida,letras_usadas)==true){//comprueba que la letra no esté usada
        alert("La letra introducida ya esta usada");
        letra_introducida=prompt([espacios_palabra]+"\nNumero de letras:"+(numero_letras+1)+"\nEl numero de INTENTOS restantes es :"+(INTENTOS-contador)+"\nLas letras usadas son: "+[letras_usadas]+"\nIntroduzca una letra por favor");
      }
  }
//programa
  while(comprobar_letra(letra_introducida,letras_usadas)==true){//comprueba que la letra no esté usada
    alert("La letra introducida ya esta usada");
    letra_introducida=prompt([espacios_palabra]+"\nNumero de letras:"+(numero_letras+1)+"\nEl numero de INTENTOS restantes es :"+(INTENTOS-contador)+"\nLas letras usadas son: "+[letras_usadas]+"\nIntroduzca una letra por favor");
    while (letra_introducida.length > 1 || isNaN(letra_introducida)==false) { //comrpueba si es una letra
        alert("El valor introducido no es una letra");
        letra_introducida=prompt([espacios_palabra]+"\nNumero de letras:"+(numero_letras+1)+"\n"+"El numero de INTENTOS restantes es :"+(INTENTOS-contador)+"\nLas letras usadas son: "+[letras_usadas]+"\nIntroduzca una letra por favor")
    }
  }
    letras_usadas.push(letra_introducida);

  for (var i=0; i<letras_palabra.length;i++) {
    if (letra_introducida==letras_palabra[i]) {
      espacios_palabra[i]=letra_introducida;
      encontrada=true;
      letras_acertadas++;
    }
  }
  if(encontrada!=true){
    contador++;
    console.log("Vida perdida");
  }
  encontrada=false
  //comprueba si has ganado
  if(numero_letras==letras_acertadas){
    alert("Has ganado, enhorabuena\nLa palabra era: "+palabra_aleatoria+"\nTe han sobrado "+(INTENTOS-contador)+" INTENTOS\nPulse f5 para jugar otra partida");
  }
}
