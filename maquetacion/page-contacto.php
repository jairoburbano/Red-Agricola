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
$page = 'contacto';
$subpage = '';
$title = 'Contacto';
include 'header.php'; ?>
<div class="add type-one"></div><!-- /.add type-one -->
<div class="wrap">
    <div class="container--contact">
        <form action="" class="formulario form--contact">
            <h1 class="section__title">Contacto</h1><!-- /.section__title -->
            <div class="input--box">
                <div class="contact--column">
                    <div class="input-group group">
                        <label for="username">Nombre</label>
                        <input type="text" name="username" id="username">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="mail">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="subject">Asunto</label>
                        <input type="text" name="subject" id="subject">
                    </div><!-- /.input-group -->
                </div><!-- /.contact--column -->
                <div class="contact--column">
                    <div class="input-group group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message"></textarea>
                    </div><!-- /.input-group -->
                </div><!-- /.input--box -->
            </div><!-- /.contact--column -->
            <div class="send-group">
                <input type="submit" class="btn btn--send" value="Enviar">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--contact -->
        <div class="contact-map">
            <div id="map"></div><!-- /#map -->
            <div class="contact__info">
                <p>
                    La Capitanía 861, Las Condes, Santiago <br />
                    Tel: (+56 2) 2201 0550
                </p>
            </div><!-- /.contact__info -->
        </div><!-- /.contact-map -->
    </div><!-- /.container--contact -->
    <aside class="sidebar--size sidebar--contact">
        <div class="add--flex">
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
        </div><!-- /.add--flex -->
    </aside><!-- /.sidebar--premium -->
</div><!-- /.wrap -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            keyboardShortcuts: false,
            zoomControl: true,
            draggable: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            streetViewControl: false,
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = '/img/marker.png'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>