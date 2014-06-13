var FormValidation = function () {

    var handleValidationSponsor = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#agregar_sponsor');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    nombresponsor: {
                        minlength: 1,
                        required: true
                    },
					fotoportada: {
                        required: true
                    }
                },
				
				errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "fotoportada") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#contenedor_imagen_upload");
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) { //En caso de ser valiso el formulario
					enviarFormSponsor();
                    //success1.show();
                    error1.hide();
                }
            });


    }


    return {
        //main function to initiate the module
        init: function () {

            handleValidationSponsor();

        }

    };

}();