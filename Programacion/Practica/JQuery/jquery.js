
//genera un texto
$(document).ready(function() {
$('#hola').text("Soy un texto generado por jQuery!");
});
//animacion de desaparecer un boton
$(document).ready(function () {

    $('#ejemplo1').click(function () {
        $(this).hide(500); // 'this' es un selector que se usa para seleccionar el elemento ya seleccionado anteriormente, en este caso #ejemplo1
    });

});

//
