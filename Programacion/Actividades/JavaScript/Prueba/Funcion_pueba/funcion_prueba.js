//programa prueba funcion

function control_errores(venta,compra){

  while (isNaN(venta)) {
    alert("No es un número  1");
    venta=prompt("Por favor, introduce un número  1");
  }

  return venta;

  while (IsNaN(compra)) {
    alert("No es un número  2");
    venta=prompt("Por favor, introduce un número  2");
  }

  return compra;
}
venta_precio=prompt("Por favor, introduce un número  1");
compra_precio=prompt("Por favor, introduce un número  2");

control_errores(venta_precio,compra_precio);

document.write(venta +" y "+compra);
