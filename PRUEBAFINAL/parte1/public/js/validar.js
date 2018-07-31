alert ("Hola");
var campo = $('#Nombre').val();

if(campo === ''){
 alert("El campo esta vacío");
return false;
}else{
 alert("Por favor, introduce un nombre");
}