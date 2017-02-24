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
<div class="wrap wrap--flex">
    <section class="container--inside registro">
        <h1 class="section__title">
            Callback title
        </h1><!-- /.section__title -->
        <div class="content">
            <p class="bajada">
                Ingresa tu Email para recuperar tu contraseña.
            </p>
        </div><!-- /.content -->
        <form action="" class="formulario form--recuperar">
            <div class="input-group group">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Ingresa tu E-mail">
            </div><!-- /.input-group -->
            <div class="send-group">
                <input type="submit" value="Enviar" class="btn btn--send">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--recuperar -->
    </section><!-- /.container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>