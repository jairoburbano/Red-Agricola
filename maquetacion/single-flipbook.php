<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Error 404</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <meta name="msapplication-TileImage" content="/ms-icon-310x310.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700|Roboto+Condensed:300,700" rel="stylesheet">

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="single-papel-digital not--logged">
        <?php include 'svg-defs.svg'; ?>
        <div class="content--flipbook">
            <iframe src="http://reactorlabs.net/papel-digital-red/html5.html" frameborder="0" class="forweb"></iframe>
            <div class="share">
                <div class="icon__share">
                    <svg><use xlink:href="#shape-icon-share" /></svg>
                </div><!-- /.icon__share -->
                <p>Compartir</p>
                <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-share-facebook" /></svg></a>
                <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-share-twitter" /></svg></a>
                <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-linkedin" /></svg></a>
                <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-gplus" /></svg></a>
                <a target="_blank" href="mailto:"><svg><use xlink:href="#shape-share-mail" /></svg></a>
            </div><!-- /.share -->
            <a href="#" download class="btn--download">
               <svg><use xlink:href="#shape-icon-download" /></svg>
                <span>Descargar PDF</span>
            </a>
        </div><!-- /.content-404 -->
        <script src="js/app.min.js"></script>
        <div class="lightbox--acceso" style="display:none;">
            <form action="" class="formulario acceso--box acceso--box--lightbox">
                <div class="close--lightbox">
                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-close"></use></svg>
                </div><!-- /.close--lightbox -->
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
        </div><!-- /.lightbox--acceso -->
    </body>
</html>