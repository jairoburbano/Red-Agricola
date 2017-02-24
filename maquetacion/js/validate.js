(function ( $ ) {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $("#rut, #regrut, #evrutprin, #evrut").Rut({
        format_on: 'keyup'
    })
    $.validator.addMethod("rut", function(value, element) {
        return this.optional(element) || $.Rut.validar(value);
    }, "Este campo debe ser un rut valido.");
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function formContact() {
        formulario = $('.form--contact');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                username: "required",
                mail: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                subject: "required",
                message: {
                    required: true,
                    minlength: 8
                },
            },
            messages: {
                username: "Este campo es requerido.",
                mail: {
                    required: "Este campo es requerido.",
                    email: "Correo inválido."
                },
                subject: "Este campo es requerido.",
                message: {
                    required: 'Este campo es requerido.',
                    minlength: 'Ingresa al menos 8 caracteres.'
                }
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formEvento() {
        formulario = $('.form__evento');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                evdias: "required",
                evname: "required",
                evlast: "required",
                evrutprin : {
                    required: true,
                    rut : true
                },
                evdireccion: "required",
                evciudad: "required",
                evcel: "required",
                evmail: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                evempresa: "required",
                pagotipo: "required",
                evmailfac: {
                    customemail: true
                },
            },
            messages: {
                evdias: "Este campo es requerido.",
                evname: "Este campo es requerido.",
                evlast: "Este campo es requerido.",
                evrutprin : {
                    required: "Este campo es requerido.",
                    rut : "Este campo es requerido."
                },
                evdireccion: "Este campo es requerido.",
                evciudad: "Este campo es requerido.",
                evcel: "Este campo es requerido.",
                evmail: {
                    required: "Este campo es requerido.",
                    customemail: "Este campo es requerido."
                },
                evempresa: "Este campo es requerido.",
                pagotipo: "Este campo es requerido.",
                evsocial: "Este campo es requerido.",
                evrut : {
                    required: "Este campo es requerido.",
                    rut : "Este campo es requerido."
                },
                evgiro: "Este campo es requerido.",
                evdir: "Este campo es requerido.",
                evmailfac: {
                    required: "Este campo es requerido.",
                    customemail: "Este campo es requerido."
                },
                evpais: "Este campo es requerido."
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formNewsletter() {
        formulario = $('.footer__newsletter');
        $('<div class="mensaje--newsletter"><div class="mensaje--news__container"><div class="mensaje--news__text"></div></div></div>').appendTo('.footer__newsletter');
        formulario.validate({
            rules: {
                newsletter: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
            },
            messages: {
                newsletter: {
                    required: "Este campo es requerido.",
                    customemail: "Este campo es requerido."
                }
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.footer__newsletter').find('.mensaje--newsletter').addClass('mensaje__error').find('.mensaje--news__text').html('<p>Hubo un error, inténtalo nuevamente.</p>').fadeIn().delay(3000).fadeOut(function() {
                            $(this).removeClass('mensaje__error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            $('.footer__newsletter').find('.mensaje--newsletter').addClass('mensaje__error').find('.mensaje--news__text').html('<p>Revisa tu correo para confirmar tu suscripción</p>').fadeIn().delay(3000).fadeOut();
                            $('.footer__newsletter').find('.form__valid').removeClass('form__valid');
                            $('.footer__newsletter')[0].reset();
                        } else {
                            $('.footer__newsletter').find('.mensaje--newsletter').addClass('mensaje__error').find('.mensaje--news__text').html('<p class="warning-msg">'+obj.message+'</p>').fadeIn().delay(3000).fadeOut();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formRegistro() {
        formulario = $('.form--registro');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                regmail: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                reguser: "required",
                regpass: "required",
                regname: "required",
                regfathername: "required",
                regmothername: "required",
                pagotipo: "required",
                pago: "required",
                regrut : {
                    rut : true
                },
            },
            messages: {
                regmail: {
                    required: "Este campo es requerido.",
                    email: "Correo inválido."
                },
                reguser: "Este campo es requerido.",
                regpass: "Este campo es requerido.",
                regname: "Este campo es requerido.",
                regfathername: "Este campo es requerido.",
                regmothername: "Este campo es requerido.",
                pagotipo: "Este campo es requerido.",
                pago: "Este campo es requerido.",
                regaddress: "Este campo es requerido.",
                regcity: "Este campo es requerido.",
                regplace: "Este campo es requerido.",
                regrut: {
                    required: "Ingresa tu RUT",
                    rut: "Debes ingresar un rut válido"
                },
                regsocial: "Este campo es requerido.",
                regdir: "Este campo es requerido.",
                regtel: "Este campo es requerido.",
                reggiro: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formPassword() {
        formulario = $('.form--pass');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                actualpass: "required",
                newpass: "required",
                newpass_again: {
                    equalTo: "#newpass"
                }
            },
            messages: {
                actualpass: "Este campo es requerido.",
                newpass: "Este campo es requerido.",
                newpass_again: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formCuenta() {
        formulario = $('.form--cuenta');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                username: "required",
                fathername: "required",
                mothername: "required",
            },
            messages: {
                username: "Este campo es requerido.",
                fathername: "Este campo es requerido.",
                mothername: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formAcceso() {
        formulario = $('.acceso--box--normal');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo('.acceso__container');
        $('<div class="message"></div>').appendTo('.acceso__container');
        formulario.validate({
            rules: {
                username: "required",
                userpass: "required",
            },
            messages: {
                username: "Este campo es requerido.",
                fathername: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formAccesoLightbox() {
        formulario = $('.acceso--box--lightbox');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo('.acceso__container');
        $('<div class="message"></div>').appendTo('.acceso__container');
        formulario.validate({
            rules: {
                username: "required",
                userpass: "required",
            },
            messages: {
                username: "Este campo es requerido.",
                fathername: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formRecuperar() {
        formulario = $('.form--recuperar');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                username: "required",
            },
            messages: {
                username: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formBrand() {
        formulario = $('.form--brand, .form--empresa');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                username: "required",
                mail: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                phone: "required",
                empresa: "required",
                message: {
                    required: true,
                    minlength: 20
                },
                'tipos[]': "required",
            },
            messages: {
                username: "Este campo es requerido.",
                mail: {
                    required: "Este campo es requerido.",
                    email: "Correo inválido."
                },
                phone: "Este campo es requerido.",
                empresa: "Este campo es requerido.",
                message: {
                    required: 'Este campo es requerido.',
                    minlength: 'Ingresa al menos 8 caracteres.'
                },
                'tipos[]': "Selecciona una"
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function formGratis() {
        formulario = $('.form--gratis');
        $('<div class="loader"><img src="img/loader.svg" alt="Loader"></div>').appendTo(formulario);
        $('<div class="message"></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                regmail: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                reguser: "required",
                regpass: "required",
                regname: "required",
                regfathername: "required",
                regmothername: "required",
                pagotipo: "required",
                pago: "required",
            },
            messages: {
                regmail: {
                    required: "Este campo es requerido.",
                    email: "Correo inválido."
                },
                reguser: "Este campo es requerido.",
                regpass: "Este campo es requerido.",
                regname: "Este campo es requerido.",
                regfathername: "Este campo es requerido.",
                regmothername: "Este campo es requerido.",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').slideDown();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').slideUp();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').slideUp();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    formContact();
    formEvento();
    formRegistro();
    formPassword();
    formCuenta();
    formAcceso();
    formAccesoLightbox();
    formRecuperar();
    formBrand();
    formGratis();
    formNewsletter();
})(jQuery);