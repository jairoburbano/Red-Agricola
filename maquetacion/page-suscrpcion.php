<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		red-agricola
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'result';
$subpage = '';
$title = 'Resultado de busqueda';
include 'header.php'; ?>
<div class="add type-one"></div><!-- /.add type-one -->
<div class="wrap">
    <section class="registro">
        <div class="container--registo">
            <h1 class="section__title">
                Suscripción
            </h1><!-- /.section__title -->
            <div class="content">
                <p class="bajada">
                    Para suscribirse, seleccione una de las alternativas de suscripción y complete el siguiente formulario.
                </p>
            </div><!-- /.content -->
        </div><!-- /.container--inside -->
        <div class="registro__tipo">
            <div class="registro__section">
                <h3>Revista + Premium digital anual</h3>
                <div class="registro__item">
                    <p>8 ediciones Redagrícola</p>
                    <p class="registro__precio">$45.000</p><!-- /.registro__precio -->
                    <div class="btn btn--dark normal--form" data-envio="envio">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
                <div class="registro__item">
                    <p>8 ediciones Redagrícola + 4 ediciones NewAg International</p>
                    <p class="registro__precio">$65.000</p><!-- /.registro__precio -->
                    <div class="btn btn--dark normal--form" data-envio="envio">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
                <div class="registro__item">
                    <p>Empresa</p>
                    <p class="registro__precio no-show">$xx.xxx</p><!-- /.registro__precio -->
                    <div class="btn btn--dark btn--empresa">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
            </div><!-- /.registro__section -->
            <div class="registro__section">
                <h3>Premium digital</h3>
                <div class="registro__item">
                    <p>Premium Digital anual</p>
                    <p class="registro__precio">$30.000</p><!-- /.registro__precio -->
                    <div class="btn btn--dark normal--form">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
                <div class="registro__item">
                    <p>Prueba gratis un mes de Premium Digital</p>
                    <p class="registro__precio no-show">$xx.xxx</p><!-- /.registro__precio -->
                    <div class="btn btn--dark gratis--form">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
            </div><!-- /.registro__section -->
            <div class="registro__section">
                <h3>Revista</h3>
                <div class="registro__item">
                    <p>Otra suscripción</p>
                    <p class="registro__precio no-show">$xx.xxx</p><!-- /.registro__precio -->
                    <div class="btn btn--dark gratis--form">Seleccionar</div><!-- /.btn btn--dark -->
                </div><!-- /.registro__item -->
            </div><!-- /.registro__section -->
        </div><!-- /.registro__tipo -->
        <form action="" class="formulario form--registro">
            <div class="registro--box">
                <h2>Perfil Usuario</h2>
                <div class="input-group group">
                    <label for="reguser">Usuario <span>*</span></label>
                    <input type="text" name="reguser" id="reguser">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regmail">Email <span>*</span></label>
                    <input type="email" name="regmail" id="regmail">
                </div><!-- /.input-group -->
                <div class="input-group group group--pass">
                    <label for="regpass">Contraseña <span>*</span></label>
                    <input type="password" class="input--pass" name="regpass" id="regpass">
                </div><!-- /.input-group -->
                <div class="content">
                    <ul class="reglist">
                        <li class="regupper">1 mayúscula</li>
                        <li class="reglower">1 minúscula</li>
                        <li class="regspecial">1 caracter especial</li>
                        <li class="regnumber">1 número</li>
                        <li class="regminim">8 caracteres mínimo</li>
                    </ul>
                </div><!-- /.content -->
            </div><!-- /.registro--box -->
            <div class="registro--box group">
                <h2>Datos personales</h2>
                <div class="input-group group">
                    <label for="regname">Nombre <span>*</span></label>
                    <input type="text" name="regname" id="regname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regfathername">Apellido paterno <span>*</span></label>
                    <input type="text" name="regfathername" id="regfathername">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regmothername">Apellido materno <span>*</span></label>
                    <input type="text" name="regmothername" id="regmothername">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regempresa">Empresa</label>
                    <input type="text" name="regempresa" id="regempresa">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regphone">Teléfono</label>
                    <input type="text" name="regphone" id="regphone">
                </div><!-- /.input-group -->
            </div><!-- /.registro--box -->
            <div class="registro--box envio--box">
                <h2>Dirección o casilla</h2>
                <div class="wrap--flex">
                    <div class="input-group group">
                        <label for="regaddress">Dirección  <span>*</span></label>
                        <input type="text" name="regaddress" id="regaddress">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="regcity">Ciudad  <span>*</span></label>
                        <input type="text" name="regcity" id="regcity">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="regplace">Comuna  <span>*</span></label>
                        <input type="text" name="regplace" id="regplace">
                    </div><!-- /.input-group -->
                </div><!-- /.wrap--flex -->
            </div><!-- /.registro--box -->
            <div class="registro--box pago--box registro--box--radio">
                <h2>Otro titulo</h2>
                <div class="pago--box--flex">
                    <div id="tipo-pago">
                        <div class="input-radio group">
                            <label for="boleta">Boleta</label>
                            <input type="radio" name="pagotipo" id="boleta">
                        </div><!-- /.input-radio -->
                        <div class="input-radio group">
                            <label for="factura">Factura</label>
                            <input type="radio" name="pagotipo" id="factura">
                        </div><!-- /.input-radio -->
                    </div><!-- /#tipo-pago -->
                </div><!-- /.pago--box--flex -->
                <div class="pago--box--flex">
                    <div class="factura--box">
                        <div class="input-group group">
                            <label for="regsocial">Razón social  <span>*</span></label>
                            <input type="text" name="regsocial" id="regsocial">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="regrut">Rut  <span>*</span></label>
                            <input type="text" name="regrut" id="regrut">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="regdir">Dirección  <span>*</span></label>
                            <input type="text" name="regdir" id="regdir">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="reggiro">Giro  <span>*</span></label>
                            <input type="text" name="reggiro" id="reggiro">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="regtel">Teléfono  <span>*</span></label>
                            <input type="tel" name="regtel" id="regtel">
                        </div><!-- /.input-group -->
                    </div><!-- /.factura--box -->
                </div><!-- /.pago--box--flex -->
            </div><!-- /.registro--box -->
            <div class="registro--box pago--box registro--box--radio">
                <h2>Medio de pago</h2>
                <div class="pago--box--flex">
                    <div id="pago">
                        <div class="input-radio group">
                            <label for="webpay">Webpay Plus</label>
                            <input type="radio" name="pago" id="webpay" disabled>
                        </div><!-- /.input-radio -->
                        <div class="input-radio group checked">
                            <label for="efectivo">Depósito o transferencia</label>
                            <input type="radio" name="pago" id="efectivo" checked>
                        </div><!-- /.input-radio -->
                    </div><!-- /#pago -->
                </div><!-- /.pago--box--flex -->
                <div class="radio-response pago--box--flex">
                    <div class="response--box" data-tipo="webpay">
                        <img src="https://blog.paxer.com/blog/wp-content/uploads/sites/47/2013/06/webpay.jpeg" alt="Webpay">
                    </div><!-- /.response--box -->
                    <div class="response--box" data-tipo="efectivo">
                        <p>
                            Datos de transferencia en el siguiente paso.
                        </p>
                    </div><!-- /.response--box -->
                </div><!-- /.radio-response -->
            </div><!-- /.registro--box -->
            <div class="checkbox-group">
                <input type="checkbox" checked name="regnews" id="regnews">
                <label for="regnews">Acepto suscribirme al newsletter.</label>
            </div><!-- /.checkbox-group -->
            <div class="send-group">
                <input type="submit" class="btn btn--suscripcion" value="Suscribir">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--registro -->
        <form action="" class="formulario form--gratis">
            <div class="registro--box">
                <h2>Perfil Usuario</h2>
                <div class="input-group group">
                    <label for="reguser">Usuario <span>*</span></label>
                    <input type="text" name="reguser" id="reguser">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regmail">Email <span>*</span></label>
                    <input type="email" name="regmail" id="regmail">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regpass">Contraseña <span>*</span></label>
                    <input type="password" name="regpass" id="regpass">
                </div><!-- /.input-group -->
            </div><!-- /.registro--box -->
            <div class="registro--box group">
                <h2>Datos personales</h2>
                <div class="input-group">
                    <label for="regname">Nombre <span>*</span></label>
                    <input type="text" name="regname" id="regname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regfathername">Apellido paterno <span>*</span></label>
                    <input type="text" name="regfathername" id="regfathername">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regmothername">Apellido materno <span>*</span></label>
                    <input type="text" name="regmothername" id="regmothername">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regempresa">Empresa</label>
                    <input type="text" name="regempresa" id="regempresa">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="regphone">Teléfono</label>
                    <input type="text" name="regphone" id="regphone">
                </div><!-- /.input-group -->
            </div><!-- /.registro--box -->
            <div class="checkbox-group">
                <input type="checkbox" checked name="regnews" id="regnews2">
                <label for="regnews2">Acepto suscribirme al newsletter.</label>
            </div><!-- /.checkbox-group -->
            <div class="send-group">
                <input type="submit" class="btn btn--suscripcion" value="Suscribir">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--registro -->
        <form action="" class="formulario form--empresa">
            <div class="registro--box group">
                <h2>Suscripciones disponibles</h2>
                <div class="chechbox__box">
                    <div class="checkbox-group">
                        <input type="checkbox" name="tipos[]" id="suscripcion">
                        <label for="suscripcion">Lorem ipsum dolor.</label>
                    </div><!-- /.checkbox-group -->
                    <div class="checkbox-group">
                        <input type="checkbox" name="tipos[]" id="suscripcion2">
                        <label for="suscripcion2">Lorem ipsum dolor.</label>
                    </div><!-- /.checkbox-group -->
                    <div class="checkbox-group">
                        <input type="checkbox" name="tipos[]" id="suscripcion3">
                        <label for="suscripcion3">Lorem ipsum dolor.</label>
                    </div><!-- /.checkbox-group -->
                    <div class="checkbox-group">
                        <input type="checkbox" name="tipos[]" id="suscripcion4">
                        <label for="suscripcion4">Lorem ipsum dolor.</label>
                    </div><!-- /.checkbox-group -->
                    <div class="checkbox-group">
                        <input type="checkbox" name="tipos[]" id="suscripcion5">
                        <label for="suscripcion5">Lorem ipsum dolor.</label>
                    </div><!-- /.checkbox-group -->
                </div><!-- /.chechbox__box -->
            </div><!-- /.registro--box -->
            <div class="registro--box group">
                <h2>Datos personales</h2>
                <div class="input-group group">
                    <label for="username">Nombre</label>
                    <input type="text" name="username" id="username">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" id="mail">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" id="empresa">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message"></textarea>
                </div><!-- /.input-group -->
            </div><!-- /.registro--box -->
            <div class="checkbox-group">
                <input type="checkbox" checked name="regnews" id="regnews3">
                <label for="regnews3">Acepto suscribirme al newsletter.</label>
            </div><!-- /.checkbox-group -->
            <div class="send-group">
                <input type="submit" class="btn btn--suscripcion" value="Enviar">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--brand -->
    </section><!-- /.container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>