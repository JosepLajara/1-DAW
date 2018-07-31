//Josep Lajara
//Programa que simula el math dice
//Declaracion de arrays/variables
var dodecaedro=0;
var resultado;
var num1;
var num2;
var resultado;
var numer1;
var operaciones=0;
var numer2;
var leer;
var entrar1=true;
var entrar2=true;
var contador=0;
var dados = new Array(5);
var dados_usados = [];
var numero1=document.getElementById("numero1");
var numero2=document.getElementById("numero2");
function tirardados(){  //simula el tirar los 5 dados y el dodecaedro
  for (var i=0;i<5;i++){
    aleatorio = Math.round((Math.random()*5)+1);
    dados[i]=aleatorio;
  }
  //simula la tirada de el dado de 12 caras
  dodecaedro = Math.round((Math.random()*11)+1);
}
//ejecuta la funcion e imprime los numeros usables
tirardados();
document.getElementById("num_adivinar").textContent="El número a conseguir es: "+dodecaedro;
document.getElementById("dados_tirados").textContent=dados;

function hacer_numero(numero1,numero2){//transforma los valores cogidos en numero
  num1=document.getElementById("numero1").value;
  num2=document.getElementById("numero2").value;
  console.log(num1);
  console.log(num2);
  if(isNaN(num1)==true){
    console.log("Entra en que no es num");
    document.getElementById("resultado").textContent="Por favor, introduce un número en las casillas"
  }
  num1=parseInt(num1);
  num2=parseInt(num2);

}
function esta_usado(numero){//comprueba si el numero usado esta usado
  document.getElementById("datos_extra").textContent="";
  for(var i=0;i<dados_usados.length;i++){
    if(numero==dados_usados[i]){
      document.getElementById("datos_extra").textContent="El valor ya está usado";
      numero2.value="";
      return true;
    }
  }
}
 function comprobar(){

 }//comprueba que los dados usados esten entre los dados

function dados_usados_añadir(){//añade dados al array auxiliar
  if(operaciones<1){
    dados_usados.push(num1,num2);
  }else {
    dados_usados.push(num2);
  }
}
function datos(){//actualiza los datos mostrados por la pantalla
  document.getElementById("resultado").textContent="El resultado es: "+resultado;
  document.getElementById("contador_html").textContent="Operaciones realizadas: "+operaciones;
  document.getElementById("numero1").readOnly = true;
  numero1.value=resultado;
  numero2.value="";
}

function acertar(resultado,dodecaedro){
  console.log("entra en funcion");
  if(resultado==dodecaedro){
    console.log("entra en acertar");
    alert("ENHORABUENA, has acertado el numero en "+operaciones+" intentos");
    window.location.reload(true);
  }
}
function suma(){
  hacer_numero(num1,num2);
    if(esta_usado(num2)==true){
      entrar1=false;
    }
    dados_usados_añadir();
    if(entrar1&&entrar2==true){//suma los valores introducidos y muestra el resultado
      resultado=num1+num2;
      contador++;
      operaciones++;
      datos();
      acertar(resultado,dodecaedro);
    }
  console.log(dados_usados);
  entrar1=true;
  entrar2=true;
  }
function resta(){
  hacer_numero(num1,num2);
    if(esta_usado(num2)==true){
      entrar1=false;
    }
    dados_usados_añadir();
    if(entrar1&&entrar2==true){//suma los valores introducidos y muestra el resultado
      resultado=num1-num2;
      contador++;
      operaciones++;
      datos();
      acertar(resultado,dodecaedro);
    }
  console.log(dados_usados);
  entrar1=true;
  entrar2=true;

}
