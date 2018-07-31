//programa muestra tabla multiplicar

var num=prompt("Introduce el número");

while(isNaN(num)){ //comprueba si es número

  num=prompt("Por favor, introduce un número");

  while(num<1 || num>100) { //comprueba si el número introducido esta entre 1-100

    alert("Por favor, introduce un número del 1 al 100");
    num=prompt("Introduce un número");

  }

}

while(num<1 || num>100) { //comprueba si el número introducido esta entre 1-100

  alert("Por favor, introduce un número del 1 al 100");
  num=prompt("Introduce un número");

  while(isNaN(num)){ //comprueba si es número

    num=prompt("Por favor, introduce un número");

  }

}

//programa mostrar tablas
for(var i=0; i<=10;i++){
  document.write("<br>" +num+" x "+i+" = "+(num*i));
}
