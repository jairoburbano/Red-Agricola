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
$page = 'category';
$subpage = '';
$title = 'Categorias';
include 'header.php'; ?>
<div class="wrap wrap--flex">
    <section class="container--inside">
        <h2 class="section__title wrap">
            Ediciones anteriores
        </h2><!-- /.section__title -->
        <div class="content--box js-grid">
            <?php
            $api_key = 'd978dd6a61f7241fc0bd5a85bd1a7ee9-us5';
            $url_base = 'http://us5.api.mailchimp.com/3.0/';
            $id_lista = '1dd00a7edf';

            $curl = curl_init();

            //Obtiene listas
            $curl_opts = array(
                //CURLOPT_URL => $url_base .'lists/'. $id_lista,
                CURLOPT_URL => $url_base . 'campaigns/?status=sent&fields=total_items',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERPWD => 'test:' . $api_key,
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            );
            curl_setopt_array($curl,$curl_opts);
            $total_items = curl_exec($curl);

            $items = json_decode($total_items);

            $curl_opts[CURLOPT_URL] = $url_base . 'campaigns/?status=sent&count='.$items->total_items.'&fields=campaigns.long_archive_url,campaigns.send_time,campaigns.settings';
            curl_setopt_array($curl,$curl_opts);
            $ret = curl_exec($curl);

            curl_close($curl);

            $json = json_decode($ret);
            $camps = array_reverse($json->campaigns);
            foreach($camps as $obj) {
                $subject = $obj->settings->subject_line;
                $title = $obj->settings->title;
                $url = $obj->long_archive_url;
                $date_str = strtotime( $obj->send_time );
                date_default_timezone_set('America/Santiago');
                setlocale(LC_TIME, 'es_CL');
                $real_date = strftime('%B %Y',$date_str);


                echo '<div class="item">';
                echo '<div class="item__meta">';
                echo '<p>'.ucfirst($real_date).'</p>';
                echo '</div><!-- /.item__meta -->';
                echo '<h2 class="item__title">';
                echo '<a href="'.$url.'" title="'.$title.'">'.$title.'</a>';
                echo '</h2><!-- /.item__title -->';
                echo '</div><!-- /.item -->';
            }
            ?>
        </div><!-- /.content--box -->
    </section><!-- /.container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>