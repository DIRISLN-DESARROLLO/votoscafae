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
        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;


                    // Simulate ajax request
                    setTimeout(function () {
                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
                if (status == 'Valid') {

                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Check axios library docs: https://axios-http.com/docs/intro
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Obtén el token del meta tag
                        }
                    });
                    $.ajax(
                        {
                            type:'post',
                            url:urlLogin,
                            beforeSend:function(){
                                console.log("consultando");
                            },
                            success:function(response){
                                if(response?.estado){
                                    Swal.fire({
                                        text: "¡Has iniciado sesión exitosamente!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "¡Ok, lo tengo!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(() => {
                                        window.location.href = '/votacion';
                                    });
                                }else{
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
                            },
                            error:function(error){
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

                   /*
                    axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)).then(function (response) {
                        if (response) {
                            form.reset();
                            console.log("promesa",response)
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "¡Has iniciado sesión exitosamente!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "¡Ok, lo tengo!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });

                            const redirectUrl = form.getAttribute('data-kt-redirect-url');

                            if (redirectUrl) {
                                location.href = redirectUrl;
                            }
                        } else {
                            console.log("Error", response)
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
                    }).catch(function (error) {
                        Swal.fire({
                            text: "Lo sentimos, parece que se detectaron algunos errores, por favor inténtalo de nuevo.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "¡Ok, lo tengo!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                    }).then(() => {
                        submitButton.removeAttribute('data-kt-indicator');

                        submitButton.disabled = false;
                    });
                    */
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
                handleSubmitAjax(); // use for ajax submit
            } else {
                handleSubmitDemo(); // used for demo purposes only
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
