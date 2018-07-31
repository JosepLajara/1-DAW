//programa que simula el juego del ahorcado
//Josep Lajara Puchalt
//funciones

//variables-Arrays
var palabras=["television","pollo","telefono","atractivo","ordenador","gato","cargador","raton","pizarra","silla","pelicula","tecla","ventana","pared","celulosa","moto"];
var letras_usadas=[];
var numero_letras;
var losdatos;
var letras_acertadas=-1;
const INTENTOS=11;
var contador=1;
var encontrada=false;
var yaUsada=false;
var letra_introducida="";
var aleatorio = Math.round(Math.random()*palabras.length);
var palabra_aleatoria = palabras[aleatorio];
var palabra_en_blanco="";
var vidas=10;
var anadir=true;
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
 function ahorcado (){
    /*console.log("Letra apretada "+e.keyCode);*/
    function comprobar_letra(letra_introducida,letras_usadas){
      for(i=0;i<letras_usadas.length;i++){
        if(letra_introducida==letras_usadas[i]){
          return true;
        }
      }
    }
    //selecciona una palabra
    vidas=INTENTOS-contador;
    letra_introducida=letra_introducir.value
    //ejecuta el programa mientras le queden INTENTOS
    if(contador<INTENTOS){
      //if(letra_introducida.length > 1 || isNaN(letra_introducida)==false ||  letra_introducida != letra_introducida.toLowerCase()) { //comrpueba si es una letra
      if(letra_introducida.length > 1 || (letra_introducida.charCodeAt(0)<97)||(letra_introducida.charCodeAt(0)>122)) {
        alert("El valor introducido no es una letra minúscula");
        test=true;
        anadir=false;
        contador--;
      }
      if(comprobar_letra(letra_introducida,letras_usadas)==true){//comprueba que la letra no esté usada
        alert("La letra introducida ya esta usada");
        yaUsada=true;
      }
      if(yaUsada==false){//ejecuta el programa si la letra no esta usada
      //programa
        for (var i=0; i<letras_palabra.length;i++) {
          if (letra_introducida==letras_palabra[i]) {
            espacios_palabra[i]=letra_introducida;
            encontrada=true;
            letras_acertadas++;
          }
        }
        palabra_blanco.textContent=espacios_palabra;
        if(encontrada!=true){
          contador++;
        }
        encontrada=false;
        console.log(letras_acertadas);
        console.log(numero_letras);
        //comprueba si has ganado
        if(numero_letras==letras_acertadas){
          alert("Has ganado, enhorabuena\nPulsa el boton 'Restablecer' para jugar otra partida");
        }
        if(anadir==true){
          letras_usadas.push(letra_introducida);
        }
      }
      anadir=true
      yaUsada=false;
      vidas=INTENTOS-contador;
      vidas_restantes.textContent = "El numero restante de vidas es: "+ vidas;
      datos.textContent = letras_usadas;
    }
    if(vidas==0){
      alert("Has perdido\nPulsa el boton 'Restablecer' para jugar otra partida");
  }

}
var datos_palabra=document.getElementById("datos");
var palabra_en_blancoDOM=document.getElementById("palabra_blanco");
var letra_puesta=document.getElementById("letra_introducir");
//var vidas_usables=document.getElementById("vidas_restantes");
//imprime array de espacios_palabra en el html
for (var i=0;i<espacios_palabra.length;i++){
    palabra_en_blanco = palabra_en_blanco + espacios_palabra[i];
}
palabra_en_blancoDOM.textContent=palabra_en_blanco;
palabra_blanco.textContent=espacios_palabra;
