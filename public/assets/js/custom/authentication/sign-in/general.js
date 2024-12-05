/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

/*!**********************************************************!*\
  !*** ../src/js/custom/authentication/sign-in/general.js ***!
  \**********************************************************/


// Class definition
var KTSigninGeneral = function () {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'dni': {
                        validators: {
                            /*regexp: {
                                //regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                regexp: /^\d{8}$/,
                                message: 'debe ingresar solo numeros',
                            },*/
                            notEmpty: {
                                message: 'numero de DNI es requerido'
                            }
                        }
                    },
                    'codigo_verificador': {
                        validators: {
                            notEmpty: {
                                message: 'El Código verificador es requerido'
                            }
                        }
                    },
                    'fecha_emision': {
                        validators: {
                            notEmpty: {
                                message: 'La fecha de emision es requerido'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',  // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
                }
            }
        );
    }
    var handleSubmitDemo = function (e) {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                   submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;
                    setTimeout(function () {
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;
                        Swal.fire({
                            text: "¡Has iniciado sesión exitosamente!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "¡Ok, lo tengo!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                form.querySelector('[name="dni"]').value = "";
                                form.querySelector('[name="codigo_verificador"]').value = "";
                                form.querySelector('[name="fecha_emision"]').value = "";
                                //form.submit(); // submit form
                                var redirectUrl = form.getAttribute('data-kt-redirect-url');
                                if (redirectUrl) {
                                    location.href = redirectUrl;
                                }
                            }
                        });
                    }, 2000);
                } else {
                    Swal.fire({
                        text: "Lo sentimos, uno de los campos ingresado es incorrecto, por favor intente nuevamente",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "¡Ok, lo tengo!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            }).catch(function (error){
                console.log(error);
            });
        });
    }

    var handleSubmitAjax = function (e) {
        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Obtén el token del meta tag
                        }
                    });
                    $.ajax(
                        {
                            type:'post',
                            url:urlLogin,
                            data: {
                                dni: $('#dni').val(),
                                codigo_verificador: $('#codigo_verificador').val(),
                                fecha_emision:$('#fecha_emision').val()
                            },
                            beforeSend:function(){
                                console.log("consultando");
                                $("#textV").show();
                                $("#load").show();
                                $("#btn-text").hide();
                            },
                            success:function(response){
                                $("#textV").hide();
                                $("#load").hide();
                                $("#btn-text").show();
                                submitButton.disabled = false;
                                console.log("respuesta del controlador",response);
                                if(response?.estado){
                                    Swal.fire({
                                        text: response.message,
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "¡Ok, lo tengo!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(() => {
                                        window.location.href = '/home';
                                    });
                                }else{
                                    Swal.fire({
                                        text: response.message,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "¡Ok, lo tengo!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            },
                            error:function(error){
                                console.log(error);
                                Swal.fire({
                                    text: "Lo sentimos, uno de los campos ingresado es incorrecto, por favor intente nuevamente",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "¡Ok, lo tengo!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        }
                    );
                } else {
                    Swal.fire({
                        text: "Lo sentimos, parece que se detectaron algunos errores, por favor inténtalo de nuevo.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "¡Ok, lo tengo!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    var isValidUrl = function(url) {
        try {
            new URL(url);
            return true;
        } catch (e) {
            return false;
        }
    }

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');

            handleValidation();

            if (isValidUrl(submitButton.closest('form').getAttribute('action'))) {
                handleSubmitAjax();
            } else {
                handleSubmitDemo();
            }
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});

/******/ })()
;
//# sourceMappingURL=general.js.map
