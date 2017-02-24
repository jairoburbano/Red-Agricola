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
$page = 'eventos';
$subpage = '';
$title = 'Eventos';
include 'header.php'; ?>
<div class="add type-one"></div><!-- /.add type-one -->
<h2 class="section__title wrap">
    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-evento"></use></svg>
    Eventos
</h2><!-- /.section__title -->
<div class="wrap wrap--evento">
    <section class="container container--evento">
        <div class="content--box content--box--evento">
            <div class="sidebar--evento">
                <form action="" class="calendario">
                    <div class="calendario__select">
                        <div class="calendario__slect__item calendario__select--big">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                            <select name="month" id="month">
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                            </select>
                        </div><!-- /.calendario__select--big -->
                        <div class="calendario__slect__item calendario__select--small">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                            <select name="year" id="year">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                            </select>
                        </div><!-- /.calendario__select--small -->
                    </div><!-- /.calendario__select -->
                    <div class="calendario--days">
                        <div class="calendario--days__item calendario--days--top">
                            <p>Lun</p>
                            <p>Mar</p>
                            <p>Mie</p>
                            <p>Jue</p>
                            <p>Vie</p>
                            <p>Sab</p>
                            <p>Dom</p>
                        </div><!-- /.calendario--days--top -->
                        <div class="calendario--days__item calendario--days--bottom">
                            <p>1</p>
                            <p>2</p>
                            <p>3</p>
                            <p>4</p>
                            <a href="single.php" title="Titulo">5</a>
                            <p>6</p>
                            <p>7</p>
                            <a href="single.php" title="Titulo">8</a>
                            <a href="single.php" title="Titulo">9</a>
                            <a href="single.php" title="Titulo">10</a>
                            <p>11</p>
                            <p>12</p>
                            <p>13</p>
                            <p>14</p>
                            <p>15</p>
                            <p>16</p>
                            <p>17</p>
                            <p>18</p>
                            <p>19</p>
                            <a href="single.php" title="Titulo">20</a>
                            <p>20</p>
                            <p>21</p>
                            <p>22</p>
                            <a href="single.php" title="Titulo">23</a>
                            <a href="single.php" title="Titulo">24</a>
                            <p>25</p>
                            <p>26</p>
                            <p>27</p>
                            <a href="single.php" title="Titulo">28</a>
                            <p>29</p>
                            <p>30</p>
                            <p>31</p>
                        </div><!-- /.calendario--days--bottom -->
                    </div><!-- /.calendario--days -->
                </form><!-- /.calendario -->
                <div class="eventos--accordeon active">
                    <div class="accordeon__title">
                        <span>Eventos próximos</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><g><rect y="6" width="14" height="2"/><rect class="icon-line" x="6" width="2" height="14"/></g></svg>
                    </div><!-- /.accordeon__title -->
                    <div class="accordeon__content" style="display: block;">
                        <dl>
                            <dt><a href="#" title="Red Agrícola">Red Agrícola</a></dt>
                            <dd><a href="#" title="Charlas">Charlas</a></dd>
                            <dd><a href="#" title="Seminarios">Seminarios</a></dd>
                            <dd><a href="#" title="Conferencias">Conferencias</a></dd>
                            <dd><a href="#" title="Talleres">Talleres</a></dd>
                            <dt><a href="#" title="Eventos de Terceros">Eventos de Terceros</a></dt>
                            <dd><a href="#" title="Charlas">Charlas</a></dd>
                            <dd><a href="#" title="Seminarios">Seminarios</a></dd>
                            <dd><a href="#" title="Conferencias">Conferencias</a></dd>
                            <dd><a href="#" title="Talleres">Talleres</a></dd>
                            <dt><a href="#" title="Todos los eventos">Todos los eventos</a></dt>
                        </dl>
                    </div><!-- /.accordeon__content -->
                </div><!-- /.eventos--accordeon -->
                <div class="eventos--accordeon">
                    <div class="accordeon__title">
                        <span>Eventos pasados</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><g><rect y="6" width="14" height="2"/><rect class="icon-line" x="6" width="2" height="14"/></g></svg>
                    </div><!-- /.accordeon__title -->
                    <div class="accordeon__content">
                        <dl>
                            <dt><a href="#" title="Red Agrícola">Red Agrícola</a></dt>
                            <dd><a href="#" title="Charlas">Charlas</a></dd>
                            <dd><a href="#" title="Seminarios">Seminarios</a></dd>
                            <dd><a href="#" title="Conferencias">Conferencias</a></dd>
                            <dd><a href="#" title="Talleres">Talleres</a></dd>
                            <dt><a href="#" title="Eventos de Terceros">Eventos de Terceros</a></dt>
                            <dd><a href="#" title="Charlas">Charlas</a></dd>
                            <dd><a href="#" title="Seminarios">Seminarios</a></dd>
                            <dd><a href="#" title="Conferencias">Conferencias</a></dd>
                            <dd><a href="#" title="Talleres">Talleres</a></dd>
                            <dt><a href="#" title="Todos los eventos">Todos los eventos</a></dt>
                        </dl>
                    </div><!-- /.accordeon__content -->
                </div><!-- /.eventos--accordeon -->
            </div><!-- /.sidebar--evento -->
            <div class="container--eventos">
                <div class="item">
                    <div class="item__meta">
                        <p>Junio 2016 <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <div class="item__media--single">
                    <img src="http://static3.demedicina.com/wp-content/uploads/pulsatilla-para-bebes.jpg" alt="Titulo">
                </div><!-- /.item__media--single -->
                <div class="content">
                    <p class="bajada">
                        Suspendisse vitae justo vel lacus tincidunt blandit eu in arcu. Phasellus dictum vulputate interdum. Pellentesque maximus congue sapien, a cursus ex lobortis iaculis. In quis semper nisi. Mauris pellentesque aliquam nunc ac dignissim.
                    </p><!-- /.bajada -->
                    <p>
                        Ut ut velit urna. Nullam non sollicitudin dolor, ac sagittis lectus. Nunc ipsum felis, dapibus vitae rutrum vel, luctus eu ante. Vivamus sed urna lorem. Mauris vitae faucibus nunc. Nam arcu ipsum, mattis quis ante et, rhoncus pulvinar nunc.
                    </p>
                    <p>
                        Praesent efficitur ante ac risus scelerisque, quis scelerisque nibh ornare. Ut lacinia ligula nec orci faucibus, vel pellentesque libero rutrum. Phasellus non mattis mauris. Nam risus lacus, dictum in libero sed, consequat congue eros.
                    </p>
                    <ol>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                    </ol>
                </div><!-- /.content -->
                <form action="" class="formulario form__evento">
                    <div class="form--container">
                        <h2 class="section__title">
                            Contacto
                        </h2>
                        <div class="registro--box cost-group">
                            <h2>Datos de evento</h2>
                            <div class="input-group group">
                                <label for="evento">Evento</label>
                                <input type="text" name="evento" id="evento" value="Holi" readonly>
                            </div><!-- /.input-group -->
                            <div class="input-radio group">
                                <label for="uno">Primer dia</label>
                                <input type="radio" name="evdias" id="uno" data-valor="10000">
                            </div><!-- /.input-radio -->
                            <div class="input-radio group">
                                <label for="dos">Segundo dia</label>
                                <input type="radio" name="evdias" id="dos" data-valor="15000">
                            </div><!-- /.input-radio -->
                            <div class="input-radio group">
                                <label for="ambos">Ambos dias</label>
                                <input type="radio" name="evdias" id="ambos" data-valor="20000">
                            </div><!-- /.input-radio -->
                        </div><!-- /.registro--box -->
                        <div class="registro--box">
                            <h2>Datos personales</h2>
                            <div class="input-group group">
                                <label for="evname">Nombre <span>*</span></label>
                                <input type="text" name="evname" id="evname">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evlast">Apellido <span>*</span></label>
                                <input type="text" name="evlast" id="evlast">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evrutprin">Rut <span>*</span></label>
                                <input type="text" name="evrutprin" id="evrutprin">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evdireccion">Dirección <span>*</span></label>
                                <input type="text" name="evdireccion" id="evdireccion">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evciudad">Ciudad <span>*</span></label>
                                <input type="text" name="evciudad" id="evciudad">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evphone">Teléfono</label>
                                <input type="tel" name="evphone" id="evphone">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evcel">Celular <span>*</span></label>
                                <input type="tel" name="evcel" id="evcel">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evmail">Email <span>*</span></label>
                                <input type="mail" name="evmail" id="evmail">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evempresa">Empresa <span>*</span></label>
                                <input type="text" name="evempresa" id="evempresa">
                            </div><!-- /.input-group -->
                            <div class="input-group group">
                                <label for="evcargo">Cargo</label>
                                <input type="text" name="evcargo" id="evcargo">
                            </div><!-- /.input-group -->
                        </div><!-- /.registro--box -->
                        <div class="registro--box">
                           <h2>Medio de pago</h2>
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
                            <div class="factura--box">
                               <h2>Datos de facturación</h2>
                                <div class="input-group group">
                                    <label for="evsocial">Razón social  <span>*</span></label>
                                    <input type="text" name="evsocial" id="evsocial">
                                </div><!-- /.input-group -->
                                <div class="input-group group">
                                    <label for="evrut">Rut  <span>*</span></label>
                                    <input type="text" name="evrut" id="evrut">
                                </div><!-- /.input-group -->
                                <div class="input-group group">
                                    <label for="evgiro">Giro  <span>*</span></label>
                                    <input type="text" name="evgiro" id="evgiro">
                                </div><!-- /.input-group -->
                                <div class="input-group group">
                                    <label for="evdir">Dirección  <span>*</span></label>
                                    <input type="text" name="evdir" id="evdir">
                                </div><!-- /.input-group -->
                                <div class="input-group group">
                                    <label for="evmailfac">Email  <span>*</span></label>
                                    <input type="mail" name="evmailfac" id="evmailfac">
                                </div><!-- /.input-group -->
                                <div class="input-group group">
                                    <label for="evpais">País  <span>*</span></label>
                                    <input type="text" name="evpais" id="evpais">
                                </div><!-- /.input-group -->
                            </div>
                        </div><!-- /.registro--box -->
                        <div class="send-group">
                            <input type="submit" value="Pagar" class="btn btn--send">
                        </div><!-- /.send-group -->
                        <input type="hidden" name="valor" id="valor" value="{{post.get_field('valor_dia_1')}}" />
                    </div><!-- /.form--container -->
                </form><!-- /.form__evento -->
                <div class="share">
                    <p>Compartir</p>
                    <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-share-facebook" /></svg></a>
                    <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-share-twitter" /></svg></a>
                    <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-linkedin" /></svg></a>
                    <a target="_blank" class="popup" href="#"><svg><use xlink:href="#shape-share-gplus" /></svg></a>
                    <a target="_blank" href="mailto:"><svg><use xlink:href="#shape-share-mail" /></svg></a>
                </div><!-- /.share -->
            </div><!-- /.container--eventos -->
        </div><!-- /.content--box -->
    </section><!-- /.container -->
    <aside class="sidebar--size sidebar--event">
        <div class="add--flex">
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
            <div class="add type-three no-margin"></div><!-- /.add type-three no-margin -->
        </div><!-- /.add--flex -->
    </aside><!-- /.sidebar -->
</div><!-- /.wrap -->
<div class="add type-one"></div><!-- /.add type-one -->
<?php include 'footer.php'; ?>