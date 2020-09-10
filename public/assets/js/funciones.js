var Biblioteca = function () {
    return {
        validacionGeneral: function (id, reglas, mensajes){
            const formulario = $('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span', //default input error message container

                //errorClass: 'text-danger', // default input error message class
                errorClass: 'help-block help-block-error', //default input error message class

                focusInvalid: false, // do not focus the last invalid input
                ignore: "", //validate all fields including form hidden input
                highlight: function (element, errorClass, validClass){
                    $(element).closest('.form-group').addClass('has-error');
                    //$(element).closest('.form-control').addClass('is-invalid'); // set error class to the control group
                },
                unhighlight: function (element){
                    $(element).closest('.form-group').removeClass('has-error');
                    //$(element).closest('.form-control').removeClass('is-invalid'); // set error class to the control group
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    //label.closest('.form-control').removeClass('is-invalid'); // set success class to the control group
                },
                errorPlacement: function (error, element) {
                    if ($(element).is('select') && element.hasClass('bs-select')){
                        error.inserAfter(element);
                    } else if($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    } else if(element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    } else{
                        error.insertAfter(element); //default placement for everything else
                    }
                },
                invalidHandler: function (event, validator){
                    //display error alert on form submit
                },
                submitHandler: function (form){
                    return true;
                }
            });
        },
    }
}();