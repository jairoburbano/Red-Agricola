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
$page = 'premium';
$subpage = 'single';
$title = 'Single';
include 'header.php'; ?>
<div class="add type-one"></div><!-- /.add type-one -->
<div class="wrap wrap--flex">
    <div class="container--single">
        <div class="contenido">
            <div class="item">
                <div class="item__meta">
                    <p>Junio 2016 <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                </div><!-- /.item__meta -->
                <h2 class="item__title">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.
                </h2><!-- /.item__title -->
            </div><!-- /.item -->
            <div class="item__media--single">
                <img src="http://static3.demedicina.com/wp-content/uploads/pulsatilla-para-bebes.jpg" alt="Titulo">
            </div><!-- /.item__media--single -->
            <div class="content">
                <p class="bajada">
                    Suspendisse vitae justo vel lacus tincidunt blandit eu in arcu. Phasellus dictum vulputate interdum. Pellentesque maximus congue sapien, a cursus ex lobortis iaculis. In quis semper nisi. Mauris pellentesque aliquam nunc ac dignissim.
                </p><!-- /.bajada -->
            </div><!-- /.content -->
            <form action="" class="formulario acceso--box acceso--box--normal">
                <div class="acceso__container">
                    <h2 class="section__title">Acceso</h2><!-- /.section__title -->
                    <div class="input-group group">
                        <label for="username">Nombre de usuario / Email</label>
                        <input type="text" id="username" name="username">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="userpass">Contraseña</label>
                        <input type="password" id="userpass" name="userpass">
                    </div><!-- /.input-group -->
                    <a href="#" title="Recuperar contraseña">Recuperar contraseña</a>
                    <div class="send-group">
                        <input type="submit" class="btn btn--suscripcion" value="Iniciar sesión">
                    </div><!-- /.send-group -->
                </div><!-- /.acceso__container -->
                <div class="acceso__links">
                    <p>¿No tienes cuenta? | <a href="#" title="Suscríbete">Suscríbete</a></p>
                </div><!-- /.acceso__links -->
            </form><!-- /.acceso--box -->
            <div class="section--columna">
                <div class="item item--single--quote format-quote">
                    <a href="category-columna.php" title="Titulo" class="item__media">
                        <img src="http://www.nosolocine.es/images/personajes/24253.jpg" alt="Titulo">
                    </a><!-- /.item__media -->
                    <div class="item__content">
                        <div class="item__by">Por <a href="category-columna.php" title="Titulo">Brad Pitt</a></div><!-- /.item__by -->
                    </div><!-- /.item__content -->
                </div><!-- /.item -->
            </div><!-- /.section--columna -->
            <div class="share">
                <p>Compartir</p>
                <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-share-facebook" /></svg></a>
                <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-share-twitter" /></svg></a>
                <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-linkedin" /></svg></a>
                <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-gplus" /></svg></a>
                <a target="_blank" href="mailto:"><svg><use xlink:href="#shape-share-mail" /></svg></a>
            </div><!-- /.share -->
        </div><!-- /.contenido -->
    </div><!-- /.container--single -->
    <aside class="sidebar--size sidebar--premium">
        <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
        <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
        <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
    </aside><!-- /.sidebar--premium -->
</div><!-- /.wrap -->
<div class="add type-one"></div><!-- /.add type-one -->
<?php include 'footer.php'; ?>