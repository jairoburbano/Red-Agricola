<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		red-agricola
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <meta name="msapplication-TileImage" content="/ms-icon-310x310.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700|Roboto+Condensed:300,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="<?php if($page == 'redagricolatv') echo "page-format-video"; ?><?php if($page == 'columna') echo "page-format-quote"; ?><?php if($page == 'eventos') echo "page-type-evento"; ?><?php if($page == 'brand') echo "page-type-brand"; ?><?php if($page == 'premium') echo "page-type-premium"; ?><?php if($page == 'papel') echo "page-template-template-papel-digital"; ?>">
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="header__top">
                    <div class="wrap">
                        <div class="header__logo">
                            <a href="index.php" title="Red Agricola">
                                <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In  -->
                                <svg version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="319.9px" height="60px" viewBox="0 0 319.9 60" enable-background="new 0 0 319.9 60" xml:space="preserve"
                                     >
                                    <defs>
                                    </defs>
                                    <g>
                                        <path class="logo--color" d="M15.1,37.1c0,1.7,0.4,2.9,1.2,3.6c0.8,0.7,2.1,1.1,3.9,1.1h0.7v2.8H0v-2.8h0.7c1.8,0,3.1-0.4,3.9-1.1
                                                                     c0.8-0.7,1.2-1.9,1.2-3.6V11.2c0-1.7-0.4-2.9-1.2-3.6C3.8,6.9,2.5,6.5,0.7,6.5H0V3.7c0.6,0,1.4-0.1,2.6-0.1C11.3,3.2,17.1,3,19.9,3
                                                                     c6.5,0,11.3,1,14.5,2.9c3.2,2,4.8,4.9,4.8,8.9c0,2.9-0.9,5.2-2.7,7.1c-1.8,1.9-4.4,3.1-7.7,3.7c1.5,1,3.3,3.6,5.5,7.7
                                                                     c0.7,1.3,1.2,2.2,1.6,2.9c1.3,2.3,2.4,3.8,3.5,4.6c1.1,0.8,2.4,1.3,4.1,1.5V45c-0.9,0.1-1.7,0.1-2.4,0.1c-0.7,0-1.5,0-2.2,0
                                                                     c-2.4,0-4.3-0.3-5.8-0.8c-1.5-0.5-2.9-1.4-4.1-2.6c-0.7-0.7-2-2.8-3.9-6.2c-1.9-3.4-3.6-6.2-5-8.3h-5V37.1z M15.1,6.3v17.6
                                                                     c1.3,0.2,2.2,0.3,2.9,0.3s1.2,0.1,1.6,0.1c3.2,0,5.7-0.8,7.4-2.3c1.7-1.5,2.6-3.8,2.6-6.7c0-3-0.8-5.3-2.5-6.9
                                                                     c-1.7-1.6-4.1-2.4-7.2-2.4c-0.4,0-1,0-1.6,0.1C17.6,6,16.5,6.1,15.1,6.3z M67.4,37.9c-2,2.4-4,4.3-6.1,5.5
                                                                     c-2.1,1.2-4.4,1.8-6.8,1.8c-3.9,0-7-1.3-9.5-3.8c-2.5-2.5-3.7-5.8-3.7-9.8c0-4.1,1.4-7.6,4.1-10.4c2.8-2.8,6.2-4.2,10.3-4.2
                                                                     c2.6,0,5,0.7,7,2.2c2.1,1.5,3.4,3.4,4,5.8c0,0.2,0.1,0.5,0.1,0.8c0.2,1.3,0.7,2.2,1.3,2.8v1.8H49.8c0.2,3.3,1,5.9,2.4,7.6
                                                                     c1.5,1.8,3.5,2.7,6,2.7c1.5,0,2.8-0.3,4.1-1c1.3-0.7,2.5-1.7,3.8-3.2L67.4,37.9z M49.8,28h9.7c0-2.6-0.5-4.5-1.3-5.8
                                                                     c-0.8-1.3-2-2-3.6-2c-1.6,0-2.8,0.7-3.6,2C50.2,23.5,49.8,25.4,49.8,28z M89.8,10c0-1.2-0.2-2-0.7-2.5c-0.5-0.4-1.5-0.9-3.1-1.3
                                                                     L85.9,4l10.7-3.7H98v35.1c0,1.2,0.2,2,0.7,2.5c0.5,0.4,1.5,0.9,3.1,1.3l0.1,2.3l-10.7,3.7h-1.4v-4.8c-2.1,1.5-4,2.6-5.7,3.4
                                                                     c-1.7,0.7-3.2,1.1-4.6,1.1c-3.1,0-5.6-1.2-7.6-3.5c-2-2.3-3-5.3-3-9c0-4.3,1.4-7.9,4.2-10.8c2.8-2.9,6.3-4.4,10.5-4.4
                                                                     c0.7,0,1.4,0.1,2.3,0.2c0.9,0.1,2.2,0.4,3.9,0.8V10z M89.8,22.7c-1.2-1-2.3-1.7-3.3-2.2c-1-0.5-2-0.7-2.8-0.7c-2,0-3.6,0.9-4.8,2.6
                                                                     c-1.2,1.8-1.8,4.1-1.8,7c0,3.3,0.6,5.9,1.7,7.7c1.2,1.9,2.8,2.8,4.9,2.8c1,0,1.9-0.2,2.9-0.7c1-0.4,2.1-1.1,3.3-2V22.7z"/>
                                        <path fill="#FFFFFF" d="M123.1,41.3c-1.2,1.3-2.5,2.2-3.8,2.9c-1.3,0.6-2.8,0.9-4.4,0.9c-2.4,0-4.3-0.6-5.7-1.9
                                                                c-1.4-1.3-2.1-3.1-2.1-5.3c0-1.6,0.5-3,1.4-4.1c0.9-1.1,2.5-2.1,4.7-3.2c0.5-0.2,1.8-0.7,4-1.4c2.2-0.7,4-1.5,5.6-2.2v-3.2
                                                                c0-1.4-0.3-2.5-0.9-3.2c-0.6-0.7-1.5-1.1-2.7-1.1c-1.2,0-2.2,0.3-2.9,1c-0.7,0.7-1,1.7-1,3c0,0.1,0,0.2,0,0.4c0,0.2,0,0.3,0,0.4
                                                                l-7.4,2.3c-0.1-0.3-0.2-0.7-0.2-1.1c-0.1-0.4-0.1-0.8-0.1-1.1c0-0.9,0.1-1.6,0.4-2.3c0.3-0.7,0.7-1.3,1.3-1.8
                                                                c1.2-1.1,2.7-1.9,4.6-2.5c1.9-0.6,3.9-0.9,5.9-0.9c1.6,0,3.1,0.2,4.5,0.6c1.4,0.4,2.6,0.9,3.5,1.6c1.2,0.9,2,1.8,2.4,2.9
                                                                c0.5,1.1,0.7,3,0.7,5.7v0.5v7.6c0,1.7,0.1,2.8,0.3,3.4c0.2,0.5,0.5,0.8,0.9,0.8c0.3,0,0.6-0.1,0.9-0.2c0.4-0.1,0.7-0.2,1.1-0.4
                                                                L135,41c-1.3,1.4-2.5,2.4-3.7,3c-1.2,0.7-2.4,1-3.5,1c-1.2,0-2.2-0.3-2.9-0.9C124.1,43.5,123.5,42.6,123.1,41.3z M122.8,29.8
                                                                c-2.9,1.2-4.9,2.3-6,3.3c-1.1,1-1.7,2.3-1.7,3.7c0,1.3,0.3,2.3,1,3.1c0.7,0.8,1.6,1.2,2.7,1.2c0.7,0,1.3-0.2,2-0.6
                                                                c0.7-0.4,1.3-1.1,2-1.9V29.8z M143.8,35.5c-2.4-0.9-4.3-2.1-5.5-3.6c-1.3-1.5-1.9-3.2-1.9-5.1c0-2.6,1.3-4.9,3.8-6.7
                                                                c2.5-1.8,5.7-2.7,9.5-2.7c1.8,0,3.5,0.2,5,0.6c1.5,0.4,3,0.9,4.4,1.7l8.8-2.2v6.6l-6.3-1.4c0.4,0.7,0.7,1.4,0.9,2
                                                                c0.2,0.7,0.3,1.3,0.3,1.9c0,2-0.6,3.7-1.9,5.1c-1.3,1.4-3.1,2.5-5.5,3.2c-1.6,0.5-3.9,0.8-6.7,0.9c-1,0-1.7,0.1-2.1,0.1
                                                                c-1.3,0.6-2.1,1.1-2.4,1.4c-0.4,0.4-0.5,0.8-0.5,1.2c0,1.4,2.7,2.1,8,2.2c0.9,0,1.6,0,2.2,0c4.4,0.1,7.7,0.7,9.9,2
                                                                c2.2,1.3,3.2,3.2,3.2,5.8c0,3.4-1.7,6.1-5,8.2c-3.3,2-7.9,3-13.6,3c-3.9,0-7-0.6-9.5-1.8c-2.4-1.2-3.7-2.8-3.7-4.6
                                                                c0-1,0.4-2,1.2-2.9c0.8-0.9,2.4-2.1,4.9-3.7c-1.8-0.8-3.2-1.7-4.1-2.6c-0.9-1-1.3-2-1.3-3.2c0-1.3,0.6-2.4,1.7-3.2
                                                                C138.7,37.1,140.8,36.3,143.8,35.5z M144.7,47.7c-0.8,0.6-1.4,1.2-1.8,1.8c-0.4,0.6-0.6,1.3-0.6,2c0,1.6,0.9,2.9,2.6,3.9
                                                                c1.7,1,4,1.5,6.8,1.5c2.9,0,5.2-0.5,6.9-1.4s2.6-2.2,2.6-3.7c0-1.1-0.4-2-1.3-2.5c-0.8-0.6-2.1-0.9-3.7-0.9c-0.4,0-1.1,0-1.9,0
                                                                C150.3,48.3,147.2,48.1,144.7,47.7z M149.3,19.9c-1.5,0-2.7,0.5-3.5,1.6c-0.8,1-1.2,2.5-1.2,4.4c0,2.4,0.4,4.3,1.3,5.5
                                                                c0.8,1.2,2.1,1.9,3.7,1.9c1.6,0,2.8-0.5,3.7-1.6c0.9-1.1,1.3-2.6,1.3-4.5c0-2.4-0.4-4.2-1.3-5.4C152.3,20.6,151,19.9,149.3,19.9z
                                                                M182,24.3l2.2-3.9c0.7-1.2,1.3-2,2-2.6c0.7-0.6,1.4-0.8,2.2-0.8c0.5,0,1.1,0.1,1.6,0.2c0.5,0.1,1.2,0.3,1.9,0.6l2.9,1.1l-3.1,6.7
                                                                l-2.5-1.1c-0.4-0.2-0.8-0.3-1.3-0.4c-0.5-0.1-0.9-0.2-1.4-0.2c-1.1,0-2.5,1.1-4.2,3.3l-0.2,0.3v10.8c0,1.5,0.3,2.6,0.8,3.1
                                                                c0.5,0.5,1.5,0.8,3,0.8l0.1,2.3h-16.2v-2.3c1.5,0,2.5-0.3,3-0.8c0.5-0.5,0.8-1.6,0.8-3.1V25.6c0-1.2-0.2-2.1-0.7-2.5
                                                                c-0.5-0.4-1.5-0.9-3.2-1.3v-2.3l10.8-3.8h1.4V24.3z M208.1,38.4c0,1.5,0.3,2.6,0.8,3.1c0.5,0.5,1.6,0.8,3,0.8l0.1,2.3h-16.1v-2.3
                                                                c1.5,0,2.5-0.3,3.1-0.8c0.6-0.5,0.8-1.6,0.8-3.1V25.6c0-1.2-0.2-2-0.7-2.5c-0.5-0.4-1.5-0.9-3.2-1.3v-2.3l10.8-3.8h1.4V38.4z
                                                                M197.8,13.7l8.3-8.6c0.8-0.9,1.6-1.5,2.2-1.9c0.6-0.4,1.3-0.6,1.9-0.6c0.8,0,1.5,0.3,2,0.8c0.5,0.5,0.8,1.2,0.8,2
                                                                c0,0.6-0.2,1.2-0.6,1.7c-0.4,0.5-1.1,1-2.3,1.6l-9.5,5H197.8z M240.3,38.1c-1.7,2.4-3.6,4.2-5.8,5.3c-2.2,1.2-4.6,1.7-7.4,1.7
                                                                c-4.1,0-7.4-1.3-10.1-3.8c-2.7-2.5-4-5.7-4-9.6c0-1.8,0.3-3.6,1-5.2c0.7-1.7,1.7-3.2,3-4.6c1.7-1.7,3.6-3,5.8-4
                                                                c2.2-0.9,4.5-1.4,6.9-1.4c3,0,5.5,0.6,7.5,1.7c2,1.1,3,2.5,3,4.1c0,0.9-0.3,1.7-1,2.3c-0.6,0.6-1.5,0.9-2.4,0.9
                                                                c-0.6,0-1.3-0.2-2-0.5c-0.7-0.4-1.3-0.8-1.9-1.5c-0.3-0.3-0.8-0.9-1.4-1.6c-1.5-1.9-2.8-2.8-4-2.8c-1.6,0-3,1-4.1,2.9
                                                                c-1.1,2-1.6,4.4-1.6,7.4c0,3.4,0.8,6.2,2.4,8.4c1.6,2.2,3.7,3.3,6.2,3.3c1.3,0,2.6-0.4,3.8-1.1c1.3-0.7,2.6-1.8,3.9-3.3L240.3,38.1
                                                                z M241.4,31.5c0-4.1,1.6-7.5,4.7-10.3c3.1-2.8,7-4.2,11.7-4.2c4.6,0,8.3,1.3,11.2,3.9c2.9,2.6,4.4,6,4.4,10c0,4.1-1.5,7.6-4.6,10.4
                                                                c-3.1,2.8-7,4.2-11.7,4.2c-4.6,0-8.3-1.3-11.2-4C242.8,39,241.4,35.6,241.4,31.5z M258.5,43.2c2,0,3.5-0.7,4.5-2.1
                                                                c1.1-1.4,1.6-3.4,1.6-6.1c0-4.6-0.8-8.4-2.4-11.3c-1.6-3-3.7-4.5-6.1-4.5c-1.9,0-3.4,0.7-4.5,2c-1.1,1.4-1.7,3.2-1.7,5.4
                                                                c0,4.9,0.8,8.9,2.4,12C253.9,41.7,255.9,43.2,258.5,43.2z M286.8,38.4c0,1.5,0.3,2.6,0.8,3.1c0.5,0.5,1.6,0.8,3,0.8l0.1,2.3h-16.1
                                                                v-2.3c1.5,0,2.5-0.3,3.1-0.8c0.6-0.5,0.8-1.6,0.8-3.1V9.9c0-1.2-0.2-2-0.7-2.5c-0.5-0.4-1.5-0.9-3.2-1.3V3.8L285.4,0h1.4V38.4z
                                                                M307.9,41.3c-1.2,1.3-2.5,2.2-3.8,2.9c-1.3,0.6-2.8,0.9-4.4,0.9c-2.4,0-4.3-0.6-5.7-1.9c-1.4-1.3-2.1-3.1-2.1-5.3
                                                                c0-1.6,0.5-3,1.4-4.1c0.9-1.1,2.5-2.1,4.7-3.2c0.5-0.2,1.8-0.7,4-1.4c2.2-0.7,4-1.5,5.6-2.2v-3.2c0-1.4-0.3-2.5-0.9-3.2
                                                                c-0.6-0.7-1.5-1.1-2.7-1.1c-1.2,0-2.2,0.3-2.9,1c-0.7,0.7-1,1.7-1,3c0,0.1,0,0.2,0,0.4c0,0.2,0,0.3,0,0.4l-7.4,2.3
                                                                c-0.1-0.3-0.2-0.7-0.2-1.1c-0.1-0.4-0.1-0.8-0.1-1.1c0-0.9,0.1-1.6,0.4-2.3c0.3-0.7,0.7-1.3,1.3-1.8c1.2-1.1,2.7-1.9,4.6-2.5
                                                                c1.9-0.6,3.9-0.9,5.9-0.9c1.6,0,3.1,0.2,4.5,0.6c1.4,0.4,2.6,0.9,3.5,1.6c1.2,0.9,2,1.8,2.4,2.9c0.5,1.1,0.7,3,0.7,5.7v0.5v7.6
                                                                c0,1.7,0.1,2.8,0.3,3.4c0.2,0.5,0.5,0.8,0.9,0.8c0.3,0,0.6-0.1,0.9-0.2c0.4-0.1,0.7-0.2,1.1-0.4l0.7,1.5c-1.3,1.4-2.5,2.4-3.7,3
                                                                c-1.2,0.7-2.4,1-3.5,1c-1.2,0-2.2-0.3-2.9-0.9C308.9,43.5,308.4,42.6,307.9,41.3z M307.7,29.8c-2.9,1.2-4.9,2.3-6,3.3
                                                                c-1.1,1-1.7,2.3-1.7,3.7c0,1.3,0.3,2.3,1,3.1c0.7,0.8,1.6,1.2,2.7,1.2c0.7,0,1.3-0.2,2-0.6c0.7-0.4,1.3-1.1,2-1.9V29.8z"/>
                                    </g>
                                </svg>

                            </a>
                        </div><!-- /.header__logo -->
                        <div class="nav--principal">
                            <div class="menu--principal">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-menu"></use></svg>
                                <div class="menu--close">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-close"></use></svg>
                                </div><!-- /.menu--close -->
                                <span>Canales</span>
                            </div><!-- /.menu--principal -->
                            <ul class="menu__content">
                                <li class="menu-item menu-item-has-children">
                                    <a href="category.php" title="Frutales">Frutales</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="#" title="Uva de mesa">Uva de mesa</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Arándanos">Arándanos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Manzanos">Manzanos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Cerezos">Cerezos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Paltos">Paltos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Kiwis">Kiwis</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Cítricos">Cítricos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Nogales">Nogales</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Almendros">Almendros</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Avellanos">Avellanos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Fresas">Fresas</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Mango">Mango</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Banano">Banano</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Carozos">Carozos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Olivos">Olivos</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Otros berries">Otros berries</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Otros frutales">Otros frutales</a>
                                                </li><!-- /.menu-item -->
                                            </ul><!-- /.submenu -->
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="category.php" title="Hortalizas">Hortalizas</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="#" title="Semillas">Semillas</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Tomate">Tomate</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Papa">Papa</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Lechuga">Lechuga</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Espárrago">Espárrago</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Alcachofa">Alcachofa</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Cebolla">Cebolla</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Capsicum">Capsicum</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Otras Hortalizas">Otras Hortalizas</a>
                                                </li><!-- /.menu-item -->
                                            </ul><!-- /.submenu -->
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="category.php" title="Cultivos">Cultivos</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="#" title="Maiz">Maiz</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Trigo">Trigo</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Raps">Raps</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Cebada">Cebada</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Avena">Avena</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Quinua">Quinua</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Arroz">Arroz</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Caña de azúcar">Caña de azúcar</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Otros Cultivos">Otros Cultivos</a>
                                                </li><!-- /.menu-item -->
                                            </ul><!-- /.submenu -->
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Empresas">Empresas</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="category.php" title="Agua">Agua</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="#" title="Agua">Agua</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Riego">Riego</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Energía">Energía</a>
                                                </li><!-- /.menu-item -->
                                            </ul><!-- /.submenu -->
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Nutrición">Nutrición</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Suelos">Suelos</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Cultivos Protegidos">Cultivos Protegidos</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Alimentos">Alimentos</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="category.php" title="Fitosanidad">Fitosanidad</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="#" title="Plagas">Plagas</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Enfermedades">Enfermedades</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Virus">Virus</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Biocontrol">Biocontrol</a>
                                                </li><!-- /.menu-item -->
                                                <li class="menu-item">
                                                    <a href="#" title="Polinización">Polinización</a>
                                                </li><!-- /.menu-item -->
                                            </ul><!-- /.submenu -->
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Viñas">Viñas</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Agtech">Agtech</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="Marketing">Marketing</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="category-tv.php" title="RedAgrícola TV">RedAgrícola TV</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="page-eventos.php" title="Eventos">Eventos</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="page-360.php" title="Redagricola 360">Redagricola 360</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="single-premium.php" title="Premium">Premium</a>
                                    <div class="content--menu">
                                        <div class="container--submenu">
                                            <div class="menu--post">
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="item__meta">
                                                        <p>Junio 2016 <span>|</span> <strong>Agua</strong></p>
                                                    </div>
                                                    <div class="item__title">
                                                        <a href="single.php" title="Titulo">
                                                            Lorem ipsum dolor sit amet, consectetur.
                                                        </a>
                                                    </div><!-- /.item__title -->
                                                </div><!-- /.item -->
                                            </div><!-- /.menu--post -->
                                        </div><!-- /.container--submenu -->
                                    </div><!-- /.content--menu -->
                                </li><!-- /.menu-item -->
                            </ul><!-- /.menu__content -->
                        </div><!-- /.nav--principal -->
                    </div><!-- /.wrap -->
                </div><!-- /.header__top -->
                <div class="header__bottom">
                    <div class="wrap">
                        <ul class="menu--secundario">
                            <li class="menu-item">
                                <a href="category-tv.php" title="Redagricola TV">Redagricola TV</a>
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a href="page-eventos.php" title="Eventos">Eventos</a>
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a href="page-brand.php" title="Redagricola 360">Redagricola 360</a>
                            </li><!-- /.menu-item -->
                            <li class="menu-item">
                                <a href="single-premium.php" title="Premium">Premium</a>
                            </li><!-- /.menu-item -->
                        </ul><!-- /.menu--secundario -->
                        <div class="lang">
                            <div class="lang--close">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-close"></use></svg>
                            </div><!-- /.lang--close -->
                            <div class="menu-lang">
                                <a href="/cl" title="Chile" class="active">Chile</a>
                                <a href="/pe" title="Perú">Perú</a>
                                <a href="#" title="Internacional">Internacional</a>
                            </div><!-- /.menu-lang -->
                            <div class="icon--lang">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-lang"></use></svg>
                            </div><!-- /.icon--lang -->
                        </div><!-- /.lang -->
                        <div class="acceso--perfil">
                            <div class="menu-lang">
                                <a href="page-cuenta.php" title="Mi cuenta">Mi cuenta</a>
                                <a href="#salir" title="Salir">Salir</a>
                            </div><!-- /.menu-lang -->
                        </div><!-- /.acceso--perfil -->
                        <a href="#" title="Acceso Premium" class="acceso acceso--button disable">Acceso Premium</a>
                        <a href="page-suscrpcion.php" title="Suscripción" class="btn btn--suscripcion">Suscripción</a>
                        <form action="page-result.php" class="buscador">
                            <div class="icon--search">
                                <input type="submit" value=" ">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-lupa"></use></svg>
                            </div><!-- /.icon--search -->
                            <div class="search">
                                <input type="text" placeholder="Buscar..." id="search">
                                <div class="search--close">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-close"></use></svg>
                                </div><!-- /.search--close -->
                            </div><!-- /.search -->
                        </form><!-- /.buscador -->
                    </div><!-- /.wrap -->
                </div><!-- /.header__bottom -->
            </header><!-- /.header -->