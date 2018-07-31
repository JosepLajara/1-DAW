//programa del MathDice
//Josep Lajara Puchalt

var dados = new Array(5);
var aleatorio=0;
var dodecaedro=0;
var dados_usados = new Array(5);
var numeros_calcular = new Array(2);
var operacion=[];
var entrar=true;
var entrar2=true;
var num_separados=[];
var contar_numeros=0;
var entrar3=true;
var entrar4=true;
var num1=0;
var num2=0;
  function tirardados(){
    //simula el tirar los 5 dados
    for (var i=0;i<5;i++){
      aleatorio = Math.round((Math.random()*5)+1);
      dados[i]=aleatorio;
    }
    //simula la tirada de el dado de 12 caras
    dodecaedro = Math.round((Math.random()*11)+1);
  }
  //programa
  tirardados();
  num_adivinar.textContent="El número a conseguir es: "+dodecaedro;
  dados_tirados.textContent=dados;
  console.log(dados);
  console.log(operacion);
function mathdice(){
  function sumar(){//suma los dos numeros

  }
  function restar(){//resta los dos numeros

  }
  function mal_introducido(comprobar){//comprueba si hay 3 valores introducidos
    if(comprobar.length==3){
      return true;
    }else{
      return false;
    }
  }
  function numeros_separados(numeros_juntos){//separa los valores introducidos 1 por 1 y los almacena en un array
    for(var i=0;i<numeros_juntos.length;i++){
      num_separados[i]=numeros_juntos.charAt(i);
    }
  }
  function numeros(operaciones){//comprueba que hay dos números
    for(var i=0;i<num_separados.length;i++){
      if(isNaN(operaciones[i])==false){
        contar_numeros++;
      }
    }
    if(contar_numeros==2){
      return true;
    }else{
      return false;
    }
    console.log(contar_numeros);
  }
  function suma_resta(array_operacion){//averigua si es suma o resta
    for(var i=0;i<array_operacion.length;i++){
      if(array_operacion[i]=="+"){
        return true;
      }
      if(array_operacion[i]=="-"){
        return false;
      }
    }
  }
  function hay_operador(operacion_array){//comprueba que hay operador
      if(suma_resta(operacion_array[1])==true || suma_resta(operacion_array[1])==false){
        return true;
      }else{
        return false;
      }
  }
  function num_dados(num1,num2,dados){//comprueba que los numeros introducidos sean los de los dados y que no esten usados
    let encontrar1=false;
    let encontrar2=false;
    for(var i=0;i<dados.length;i++){
      if(num1==dados[i]){
        encontrar1=true;
        dados_usados.push(num1);
      }
      if(num2==dados[i]){
        encontrar2=true;
        dados_usados.push(num2);
      }
    }
    if(encontrar1&&encontrar2==true){
      return true;
    }else{
      return false;
    }
  }
  //programa
  operacion=operacion_introducida.value;
  numeros_separados(operacion);
  num1=operacion[0];
  num2=operacion[2];
  if(mal_introducido(operacion)==false){
    //alert("Introduzca 2 números y un operador");
    alert("no son 3 valores");
    entrar=false;
  }else if(hay_operador(operacion)==false){
    alert("no hay operador");
    entrar2=false;
  }else if(numeros(operacion)==false){
    entrar3=false;
    alert("no hay 2 numeros");
  }else if(num_separados[1]==(hay_operador(operacion)==true)){
    console.log("Entra en no signo medio");
    entrar4=false;
    alert("el valor del centro no es un signo");
  }else if(num_dados(num1,num2,dados)==false){
    entrar4=false;
    alert("el valor no esta entre los dados");
  }
  if(entrar==true && entrar2==true && entrar3==true && entrar4==true){
    //aquí va el programa
    alert("entra en el programa");
  }
  console.log(operacion);
  console.log(dados_usados);
  console.log(num_separados);
  entrar=true;
  entrar2=true;
  entrar3=true;
  entrar4=true;
  no_operador=true;
  contar_numeros=0;
}
/*if(suma_resta(operacion)==true){
  console.log("Entra en el programa")
  alert("Ha entrado en suma");
}else{
  alert("Ha entrado en resta");
}*/

  //var operacion=document.getElementById("operacion_introducida");
