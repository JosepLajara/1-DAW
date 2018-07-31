var aleatorio = Math.round((Math.random()*100)+1);

  console.log(aleatorio);

var numero;

//numero=prompt('Introduce un valor del 1 al 100:');

  console.log(numero);

while (numero!=aleatorio) {
  numero=prompt('Introduce un valor del 1 al 100:');
  if(numero>aleatorio){
    alert("Te has pasado");
  }else if (numero<aleatorio) {
    alert("Te has quedado corto")
  }
}
if(numero=aleatorio){
  alert("Has acertado, enhorabuena!!");
}
