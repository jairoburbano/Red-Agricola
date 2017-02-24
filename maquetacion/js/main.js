(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.outerWidth();
    function content() {
        var bloquote = $('blockquote');
        bloquote.prepend('<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-openquote"></use></svg>').append('<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-closequote"></use></svg>');
    }
    function menu() {
        /* WRAP MENU */
        if(windowSize < 740) {
            var item = $('.menu-item-has-children');
        } else {
            var item = $('.menu__content > .menu-item');
        }
        item.find('> a').wrap('<div class="item--menu"></div>');
        /* ICONO MENU-ITEM */
        if(windowSize < 1030) {
            item.find('.item--menu').prepend('<div class="icon--open"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><g><rect y="6" width="14" height="2"/><rect class="icon-line" x="6" width="2" height="14"/></g></svg></div>');
        }
        var icon = $('.menu--principal'),
            menu = $('.menu__content'),
            iconOpen = $('.icon--open');

        /* ANCHO CONTENT--MENU */
        $('.content--menu').each(function() {
            var $this = $(this);
            if($(this).find('.submenu').length) {
                if(windowSize > 740 && windowSize < 1030) {
                    $this.width(526);
                } else if(windowSize > 1030) {
                    $this.width(628);
                }
            } else {
                if(windowSize > 740 && windowSize < 1030) {
                    $this.width(322);
                } else if(windowSize > 1030) {
                    $this.width(424);
                }
            }
        });
        /* ABRIR MENU */
        icon.on('click', function() {
            $(this).toggleClass('active');
            if(windowSize < 740) {
                menu.stop().slideToggle();
            } else {
                menu.stop().fadeToggle();
                menuAtura();
            }
        });
        /* SLIDE MENU */
        if(windowSize < 740) {
            iconOpen.on('click', function() {
                var $this = $(this);
                $this.parents('.menu-item').toggleClass('menu--active').find('.content--menu').stop().slideToggle();
                $this.parents('.menu-item').siblings().removeClass('menu--active').find('.content--menu').slideUp();
            });
        } else if(windowSize > 740 && windowSize < 1030) {
            iconOpen.on('click', function() {
                var $this = $(this);
                $this.parents('.menu-item').toggleClass('menu--active').find('.content--menu').toggleClass('open-content');
                $this.parents('.menu-item').siblings().removeClass('menu--active').find('.content--menu').removeClass('open-content');
            });
        }
        /* MENU BOTTOM */
        var buscador = $('.buscador'),
            lang = $('.lang'),
            langOpen = $('.icon--lang'),
            langClose = $('.lang--close');
        if(windowSize < 740) {
            langOpen.on('click', function() {
                $(this).parent().addClass('lang--open');
                buscador.removeClass('search--open'); 
            });
            langClose.on('click', function() {
                $(this).parent().removeClass('lang--open'); 
            });
        }
        var searchOpen = $('.icon--search'),
            searchClose = $('.search--close');
        searchOpen.on('click', function() {
            $(this).parents('.buscador').addClass('search--open');
            lang.removeClass('lang--open'); 
            $('#search').focus();
        });
        searchClose.on('click', function() {
            $(this).parents('.buscador').removeClass('search--open'); 
        });
    }
    function menuAtura() {
        $('.menu__content').each(function(){  
            var highestBox = 0;
            $('.content--menu', this).each(function(){
                if($(this).height() > highestBox) {
                    highestBox = $(this).height(); 
                }
            });  
            $('.content--menu',this).height(highestBox + 10);
            $('.submenu').height(highestBox - 10);
            $('.menu__content').height(highestBox - 8);
        });
    }
    function titleItem() {
        var item = $('.item .item__title');
        item.each(function() {
            var ancho = $(this).width();
            if(ancho < 300) {
                $(this).parents('.item').addClass('item--small');
            } else if(ancho > 300 && ancho < 500) {
                $(this).parents('.item').addClass('item--medium');
            }
        });
    }
    function eventosAccordeon() {
        var item = $('.accordeon__title');
        item.on('click', function() {
            var $this = $(this);
            $this.parent().toggleClass('active').find('.accordeon__content').stop().slideToggle();
            $this.parent().siblings().removeClass('active').find('.accordeon__content').slideUp();
        });
    }
    function preguntas() {
        var item = $('.ask__title');
        item.on('click', function() {
            var $this = $(this);
            $this.parent().toggleClass('active').find('.ask__content').stop().slideToggle(function() {
                $('html, body').animate({
                    scrollTop: $this.offset().top
                }, 1000);
            });
            $this.parent().siblings().removeClass('active').find('.ask__content').slideUp();
        });
    }
    function suscribe() {
        var content = $('.suscribe__content').outerHeight(),
            button = $('.suscribe__button');
        if(windowSize > 1030) {
            button.height(content);
        }
    }
    function cuenta() {
        var buttonPass = $('#cambio-pass'),
            cancelPass = $('#cancel-pass'),
            buttonPerfil = $('#cambio--perfil'),
            cancelPerfil = $('#cancel-perfil'),
            linksPerfil = $('#edit--save'),
            formulario = $('.form--cuenta');
        buttonPass.on('click', function() {
            var $this = $(this);
            $this.fadeOut();
            $this.parents('.form--pass').find('.content--pass').slideDown();
            $this.parents('.form--pass').addClass('active');
            linksPerfil.hide();
            $('.form--cuenta').find('input').prop('readonly', true);
            $('.form--cuenta')[0].reset();
            formulario.addClass('readonly');
            $('.cuenta--edit').addClass('btn--inactivo');
        });
        cancelPass.on('click', function() {
            var $this = $(this);
            buttonPass.fadeIn();
            $this.parents('.form--pass').find('.content--pass').slideUp();
            $this.parents('.form--pass').removeClass('active');
            $('.cuenta--edit').removeClass('btn--inactivo');

        });
        buttonPerfil.on('click', function() {
            var $this = $(this);
            $this.fadeOut(function() {
                if(formulario.length) {
                    $('html, body').animate({
                        scrollTop: $('.form--cuenta').offset().top
                    }, 1000);
                }
            });
            linksPerfil.slideDown();
            $('.form--cuenta').find('input').prop('readonly', false);
            cancelPass.parents('.form--pass').find('.content--pass').slideUp();
            cancelPass.parents('.form--pass').removeClass('active');
            cancelPass.parents('.form--pass')[0].reset();
            formulario.removeClass('readonly');
            $('.form--pass').addClass('btn--inactivo');
        });
        cancelPerfil.on('click', function() {
            buttonPerfil.fadeIn();
            linksPerfil.slideUp();
            $('.form--cuenta').find('input').prop('readonly', true);
            formulario.addClass('readonly');
            $('.form--pass').removeClass('btn--inactivo');
        });
    }
    function radio() {
        var group = $('.input-radio');
        group.on('click', function() {
            var $this = $(this);
            if($this.find('input').is(':checked')) {
                $this.addClass('checked');
                $this.siblings().removeClass('checked');
            } else {
                $this.removeClass('checked');
            }
        });
        var group2 = $('.checkbox-group');
        group2.on('click', function() {
            var $this = $(this);
            if($this.find('input').is(':checked')) {
                $this.addClass('checked');
            } else {
                $this.removeClass('checked');
            }
        });
        $('.cost-group .input-radio').on('click', function() {
            var $this = $(this),
                valor = $this.find('input').attr('data-valor');
            $('#valor').val(valor);
        });
    }
    function registro() {
        var box = $('#tipo-pago'),
            input = box.find('input'),
            boxPago = $('#pago'),
            inputPago = boxPago.find('input');
        input.on('change', function() {
            var $this = $(this),
                boxFactura = $('.factura--box');
            if($this.is(':checked') && $this.attr('id') == 'factura') {
                boxFactura.slideDown();
                boxFactura.find('input').prop('required', true);
            } else {
                boxFactura.slideUp();
                boxFactura.find('input').prop('required', false);
            }
        });
        inputPago.on('change', function() {
            var $this = $(this),
                inputTipo = $this.attr('id'),
                tipo = $('.response--box');
            tipo.each(function() {
                var $this = $(this),
                    attrTipo = $this.attr('data-tipo');
                if(inputTipo == attrTipo) {
                    $this.slideDown();
                    $this.siblings().slideUp();
                }
            });
        });

        var button = $('.registro__item .btn--dark'),
            form = $('.form--registro'),
            form1 = $('.normal--form'),
            formGratis = $('.gratis--form'),
            formEmpresa = $('.btn--empresa');
        button.on('click', function() {
            var $this = $(this);
            $this.addClass('active');
            $this.parents('.registro__section').siblings().find('.btn--dark').removeClass('active');
            $this.parents('.registro__item').siblings().find('.btn--dark').removeClass('active');
        });
        form1.on('click', function() {
            var tipo = $(this).attr('data-envio'),
                envio = $('.envio--box'),
                $this = $(this);
            if(tipo == 'envio') {
                envio.slideDown();
                envio.find('input').prop('required', true);
            } else {
                $('.form--empresa, .form--registro').slideUp();
                envio.find('input').prop('required', false);
            }
            $('.form--gratis').slideUp(500);
            form.slideDown(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top
                }, 1000);
            });
        });
        formGratis.on('click', function() {
            var $this = $(this);
            $('.form--empresa, .form--registro').slideUp(500);
            $('.form--gratis').slideDown(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top
                }, 1000);
            });
        });
        formEmpresa.on('click', function() {
            var $this = $(this);
            $('.form--gratis, .form--registro').slideUp(500);
            $('.form--empresa').slideDown(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top
                }, 1000);
            });
        });
    }
    function masonry() {
        if($('.js-grid').length) {
            WebFont.load({
                google: {
                    families: ['Noto Serif', 'Roboto Condensed']
                }, 
                active: function() {
                    var $container = $('.js-grid').imagesLoaded( function() {
                        $container.masonry({
                            itemSelector: '.item',
                            percentPosition: true
                        });
                    });
                    sidebarHome();
                }
            });
        }
    }
    function flipbook() {
        if($('.flipbook').length) {
            /*NOTE: Numero de la pagina*/
            function getViewNumber(book, page) {
                return parseInt((page || book.turn('page'))/2 + 1, 10);
            }
            /*NOTE: Total paginas*/
            function numberOfViews(book) {
                return $('.flipbook').turn('pages') / 2 + 1;
            }
            /*NOTE: Iniciamos el slide y cambiamos paginas*/
            $( "#slider" ).slider({
                min: 1,
                max: 100,
                stop: function() {
                    $('.flipbook').turn('page', Math.max(1, $(this).slider('value')*2 - 2));
                }
            });
            /*NOTE: Iniciamos flipbook*/
            function magazine() {
                var width = $('.flipbook-viewport').width(),
                    height = $('.flipbook-viewport .content').height();
                if(windowSize < 1030) {
                    $('.flipbook').turn({
                        width: height * 0.72,
                        height: height,
                        autoCenter: true,
                        display: 'single',
                        when: {
                            turned: function(e, page, view) {
                                var book = $(this);
                                $('#slider').slider('value', getViewNumber(book, page));
                                if (page!=1 && page!=book.turn('pages'))
                                    $('.magazine2 .tabs').fadeIn(500);
                                book.turn('center');
                            },
                            end: function(e, pageObj) {
                                var book = $(this);
                                setTimeout(function() {
                                    $('#slider').slider('value', getViewNumber(book));
                                }, 1);
                            }
                        }
                    });
                } else {
                    $('.flipbook').turn({
                        width: height * 1.44,
                        height: height,
                        autoCenter: true,
                        when: {
                            turned: function(e, page, view) {
                                var book = $(this);
                                $('#slider').slider('value', getViewNumber(book, page));
                                if (page!=1 && page!=book.turn('pages'))
                                    $('.magazine2 .tabs').fadeIn(500);
                                book.turn('center');
                            },
                            end: function(e, pageObj) {
                                var book = $(this);
                                setTimeout(function() {
                                    $('#slider').slider('value', getViewNumber(book));
                                }, 1);
                            }
                        }
                    });
                }
                $('.flipbook').bind('start', function (event, pageObject, corner) {
                    if (corner == 'bl' || corner == 'br')
                    {
                        event.preventDefault();
                    }
                });
                if(windowSize > 1030) {
                    $('.flipbook-viewport').zoom({
                        flipbook: $('.flipbook')
                    });
                    $('.flipbook-viewport').bind('zoom.tap', zoomTo);
                    $(window).resize(function() {
                        resizeViewport();
                    }).bind('orientationchange', function() {
                        resizeViewport();
                    });
                    resizeViewport();
                }
                /*NOTE: Flipbook con teclas*/
                $(document).keydown(function(e){
                    var previous = 37, next = 39, esc = 27;
                    switch (e.keyCode) {
                        case previous:
                            // left arrow
                            $('.flipbook').turn('previous');
                            e.preventDefault();
                            break;
                        case next:
                            //right arrow
                            $('.flipbook').turn('next');
                            e.preventDefault();
                            break;
                        case esc:
                            $('.flipbook-viewport').zoom('zoomOut');	
                            e.preventDefault();
                            break;
                    }
                });
                $('.flipbook--next').on('click', function() {
                    $('.flipbook').turn('next');
                    e.preventDefault();
                });
                $('.flipbook--prev').on('click', function() {
                    $('.flipbook').turn('previous');
                    e.preventDefault();
                });
                /*NOTE: Slide con numero de paginas total*/
                $('#slider').slider('option', 'max', numberOfViews());
            }
            magazine();
            function zoomTo(event) { 
                $('.flipbook-viewport').toggleClass('zoomed');
                setTimeout(function() {
                    if ($('.flipbook-viewport').data().regionClicked) {
                        $('.flipbook-viewport').data().regionClicked = false;
                    } else {
                        if ($('.flipbook-viewport').zoom('value')==1) {
                            $('.flipbook-viewport').zoom('zoomIn', event);
                        } else {
                            $('.flipbook-viewport').zoom('zoomOut');
                        }
                    }
                }, 1);
            }
            function resizeViewport() {
                var width = $(window).width(),
                    height = $(window).height(),
                    options = $('.flipbook').turn('options');

                $('.flipbook-viewport').css({
                    width: width,
                    height: height
                }).zoom('resize');
            }
        }
    }
    function lightboxAcceso() {
        var button = $('.acceso, .type-papel-acceso'),
            lightbox = $('.lightbox--acceso'),
            close = $('.close--lightbox');
        button.on('click', function() {
            lightbox.fadeIn();
        });
        close.on('click', function() {
            lightbox.fadeOut();
        });
        $('.type-papel-acceso').on('click', function(e) {
            e.preventDefault();
        })
    }
    function cuentaFixed() {
        if($('.form--cuenta').lenght) {
            var alto = $(window).scrollTop(),
                altura = alto + $(window).height(),
                footer = $('.footer').offset().top,
                form = $('.form--cuenta').offset().top;
            if (windowSize < 740) {
                if(altura > footer) {
                    $('.edit--save').addClass('stop-here');
                } else {
                    $('.edit--save').removeClass('stop-here');
                }
            } else {
                if(alto > form) {
                    $('.edit--save').addClass('init-here');
                } else {
                    $('.edit--save').removeClass('init-here');
                }
            }
        }
    }
    function portadilla() {
        var box = $('.brand__box').height(),
            column = $('.brand__column__media');
        if(windowSize > 740) {
            column.height(box);
        }
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function sidebarHome() {
        if(windowSize > 740) {
            var destacado = $('.home .destacado').height(),
                sidebar = $('.home .sidebar').height(),
                altura = sidebar - destacado,
                content = $('.home .flex--reverse');
            content.css('min-height', altura);
            var portadillaSidebar = $('.single-ra360 .sidebar'),
                portadillaAltura = portadillaSidebar.height();
            portadillaSidebar.parents('.wrap').css('min-height', portadillaAltura);
        }
    }
    function validatePass() {
        var campo = $('.input--pass');
        campo.keyup(function() {
            var $this = $(this),
                valor = $this.val();
            upper = new RegExp("[A-Z]");
            lower = new RegExp("[a-z]");
            special = new RegExp("[!@#$%^&*()\_=+{};:,<.>-]");
            number = new RegExp("[0-9]");
            if (valor.match(upper)) {
                $('.regupper').addClass('regdone');
            } else {
                $('.regupper').removeClass('regdone');
            }
            if (valor.match(lower)) {
                $('.reglower').addClass('regdone');
            } else {
                $('.reglower').removeClass('regdone');
            }
            if (valor.match(special)) {
                $('.regspecial').addClass('regdone');
            } else {
                $('.regspecial').removeClass('regdone');
            }
            if (valor.match(number)) {
                $('.regnumber').addClass('regdone');
            } else {
                $('.regnumber').removeClass('regdone');
            }
            if (valor.length > 7 ) {
                $('.regminim').addClass('regdone');
            } else {
                $('.regminim').removeClass('regdone');
            }
            if($('.reglist').find('li.regdone').length < 5) {
                $this.parents('.group').addClass('campo__error');
                $this.parents('.group').removeClass('campo__valid');
            } else {
                $this.parents('.group').removeClass('campo__error');
                $this.parents('.group').addClass('campo__valid');
            }
        });
    }
    function items() {
        var item = $('.item'),
            target = $('.item__media, .item__title');
        target.mouseenter(function() {
            $(this).parents('.item').addClass('item--hover');
        });
        target.mouseleave(function() {
            $(this).parents('.item').removeClass('item--hover');
        });
    }
    function eventosHome() {
        var count = $('.section--evento').find('.item').length;
        if(count < 3) {
            $('.section--evento').addClass('evento--center');
        }
    }
    function share() {
        var icon = $('.icon__share');
        icon.on('click', function() {
            $(this).parent().toggleClass('active');
        });
    }
    content();
    menu();
    titleItem();
    eventosAccordeon();
    preguntas();
    suscribe();
    cuenta();
    radio();
    registro();
    flipbook();
    lightboxAcceso();
    portadilla();
    validatePass();
    items();
    eventosHome();
    share();
    $(window).on('load', function() {
        masonry();
        popupLinks();
    });
    $(window).scroll(function() {
        cuentaFixed();
    });
})(jQuery);
