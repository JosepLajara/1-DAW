var letra="a";

  console.log(letra);

var aleatorio=prompt('Introduce una letra:');

//aleatorio=prompt('Introduce una letra:');

//numero=prompt('Introduce un valor del 1 al 100:');

  console.log(aleatorio);

while (letra != aleatorio) {
    alert("Intentelo de nuevo");
    aleatorio=prompt('Introduce una letra:');
}
  alert("Has acertado, enhorabuena!!");
