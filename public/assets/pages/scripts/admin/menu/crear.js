$(document).ready(function (){
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function() {
        $('#mostrar-icono').removeClass().addClass('fas ' + $(this).val());
    });
});