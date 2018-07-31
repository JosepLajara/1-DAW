//programa simulacion del ahorcado con 1 letra

var contador=5;
  var num=Math.round(Math.random()* (122 - 97) + 97);
  var letra_aleatoria=String.fromCharCode(num);

  console.log(letra_aleatoria);
while (contador>0) {//comprueba si intentos =0 y termina el programa
  //document.write("El numero de intentos restantes es:"+contador);
  var letra=prompt("Introduzca una letra por favor\n"+"El numero de intentos restantes es :"+contador);

  while (isNaN(letra)==false ||   letra != letra.toLowerCase() || letra.length>=2) {//comprueba si es una letra el valor introducido o si es mayúscula

    alert("Introduzca una letra en minuscula por favor");
    letra=prompt("Introduzca una letra por favor\n"+"El numero de intentos restantes es :"+contador);

  }
  if(letra==letra_aleatoria){
    alert("Enhorabuena, has acertado");
    contador=0;
  }else{
    alert("Letra incorrecta, por favor, vuelve a intentarlo");
  }
  contador--;
}
if(contador==0){
  alert("Has perdido");
}
//alert("Has perdido")
