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
<h1 class="section__title wrap">
    Mi perfil
</h1><!-- /.section__title -->
<div class="wrap wrap--flex--cuenta">
    <section class="container--inside">
        <h2 class="section__title title__small">Tipo de suscripción</h2><!-- /.section__title title__small -->
        <div class="cuenta--flex">
            <div class="cuenta__column content">
                <h3>Revista + Premium digital anual</h3>
                <p>
                    8 ediciones Redagrícola Chile + 8 ediciones Redagrícola Perú + Acceso premium digital anual
                </p>
            </div><!-- /.cuenta__column -->
            <div class="cuenta__column cuenta__time">
                <p>Tu suscripción vencerá el: <br/> <b>18 de noviembre de 2017</b></p>
                <a href="#" title="Suscribir" class="btn btn--dark">Suscribir</a>
            </div><!-- /.cuenta__column cuenta__time -->
        </div><!-- /.cuenta--flex -->
        <form action="" class="formulario form--cuenta readonly">
            <div class="cuenta--box">
                <h2 class="section__title title__small">Datos personales</h2><!-- /.section__title title__small -->
                <div class="input-group group">
                    <label for="usernick">Usuario</label>
                    <input type="text" name="usernick" id="usernick" value="Brad" disabled>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="usermail">Email</label>
                    <input type="mail" name="usermail" id="usermail" value="brad.pitt@gmail.com" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="username">Nombre</label>
                    <input type="text" name="username" id="username" value="William Bradley" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="fathername">Apellido Paterno</label>
                    <input type="text" name="fathername" id="fathername" value="Pitt" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="mothername">Apellido Materno</label>
                    <input type="text" name="mothername" id="mothername" value="-" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" id="empresa" value="Hollywood" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="userphone">Teléfono</label>
                    <input type="tel" name="userphone" id="userphone" value="123456789" readonly>
                </div><!-- /.input-group -->
            </div><!-- /.cuenta--box -->
            <div class="cuenta--box final--box">
                <h2 class="section__title title__small">Datos de envio</h2><!-- /.section__title title__small -->
                <div class="input-group group">
                    <label for="useraddres">Dirección</label>
                    <input type="text" name="useraddres" id="useraddres" value="Shawnee" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="userplace">Comuna</label>
                    <input type="text" name="userplace" id="userplace" value="Oklahoma" readonly>
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="usercity">Ciudad</label>
                    <input type="text" name="usercity" id="usercity" value="USA" readonly>
                </div><!-- /.input-group -->
            </div><!-- /.cuenta--box -->
            <div id="edit--save" class="edit--save">
                <div class="links__content">
                    <input class="btn btn--cancel" id="cancel-perfil" type="reset" value="Cancelar">
                    <input type="submit" class="btn btn--save" value="Guardar perfil">
                </div><!-- /.links__content -->
            </div><!-- /#edit--save.edit--save -->
        </form><!-- /.formulario form--cuenta -->
    </section><!-- /.container -->
    <div class="sidebar--size sidebar--cuenta">
        <form action="" class="formulario form--pass">
            <div class="content--pass">
                <h3>Cambiar contraseña</h3>
                <div class="input-group group">
                    <label for="actualpass">Contraseña actual <span>*</span></label>
                    <input type="password" name="actualpass" id="actualpass">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="newpass">Nueva contraseña <span>*</span></label>
                    <input type="password" name="newpass" id="newpass">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="newpass_again">Confirmar contraseña <span>*</span></label>
                    <input type="password" name="newpass_again" id="newpass_again">
                </div><!-- /.input-group -->
                <div class="pass__links">
                    <div class="links__content">
                        <input type="reset" class="btn btn--cancel" id="cancel-pass" value="Cancelar">
                        <input type="submit" class="btn btn--save" value="Guardar contraseña">
                    </div><!-- /.links__content -->
                </div><!-- /.pass__links -->
            </div><!-- /.content--pass -->
            <div class="btn btn--cambio" id="cambio-pass">Cambiar contraseña</div>
        </form><!-- /.cuenta--pass -->
        <div class="cuenta--edit">
            <div class="btn btn--cambio" id="cambio--perfil">Editar perfil</div>
        </div><!-- /.cuenta--edit -->
    </div><!-- /.sidebar--size sidebar--cuenta -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>