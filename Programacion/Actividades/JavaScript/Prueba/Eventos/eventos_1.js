//Cmprueba si es aleatorio
//introducido,aleatorio

  function numaleatorio(){
  /*    console.log(aleatorio);
    aleatorio=aleatorio.toString;*/
    console.log(aleatorio);
    introducido=parseInt(entrada.value);
    contador_caja.value=contador;
    if(isNaN(introducido)){
      salida.value="El valor introducido no es un número";
    }else if (introducido<1 || introducido>10) {
      salida.value="Introduce un número entre 0 y 10";
    }else{
      if(introducido==aleatorio){
        salida.value="Acertaste";
      }else{
        salida.value="Fallaste";
        contador++;
      }
    }
  }

var num_introducido="";

var num_introducido = document.getElementById('entrada'); ////apunta a el html, a la caja de entrada

var respuesta = document.getElementById('salida'); //apunta a el html, a la caja de salida

var contador_caja = document.getElementById('contador'); //apunta a el html, a la caja de contador

var aleatorio = Math.round((Math.random()*10)+1);

var contador=1;
