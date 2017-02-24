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
<div class="wrap wrap--flex">
    <section class="container--event">
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
                <div class="item type-evento">
                    <div class="item__meta">
                        <p>Red Agricola TV <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        <a href="single-evento.php" title="Titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.</a>
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <div class="item type-evento">
                    <div class="item__meta">
                        <p>Red Agricola TV <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        <a href="single-evento.php" title="Titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.</a>
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <div class="item type-evento">
                    <div class="item__meta">
                        <p>Red Agricola TV <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        <a href="single-evento.php" title="Titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.</a>
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <div class="item type-evento">
                    <div class="item__meta">
                        <p>Red Agricola TV <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        <a href="single-evento.php" title="Titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.</a>
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <div class="item type-evento">
                    <div class="item__meta">
                        <p>Red Agricola TV <span>|</span> <a href="category.php" title="Titulo">Agua</a></p>
                    </div><!-- /.item__meta -->
                    <h2 class="item__title">
                        <a href="single-evento.php" title="Titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, consectetur id eveniet iure aliquid. Quam.</a>
                    </h2><!-- /.item__title -->
                    <div class="item__date">
                        10 de agosto - 11 de agosto 2016
                    </div><!-- /.item__date -->
                    <div class="item__datos">
                        <p>Hora: <b>07:11 - 23:11</b></p>
                        <p>Lugar: <b>Lorem ipsum dolor sit.</b></p>
                    </div><!-- /.item__datos -->
                </div><!-- /.item -->
                <ul class="paginador">
                    <li>
                        <a href="#" title="Anterior" class="disable">
                            <svg><use xlink:href="#shape-icon-prev" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="1" class="current">1</a>
                    </li>
                    <li>
                        <a href="#" title="2">2</a>
                    </li>
                    <li>
                        <a href="#" title="3">3</a>
                    </li>
                    <li>
                        <a href="#" title="Siguiente">
                            <svg><use xlink:href="#shape-icon-next" /></svg>
                        </a>
                    </li>
                </ul><!-- /.paginador -->
            </div><!-- /.container--eventos -->
        </div><!-- /.content--box -->
    </section><!-- /.container -->
    <aside class="sidebar--size sidebar--event">
        <div class="add--flex">
            <div class="add type-three no-margin"></div><!-- /.add type-three -->
            <div class="add type-three no-margin"></div><!-- /.add type-three -->
            <div class="add type-three no-margin"></div><!-- /.add type-three -->
        </div><!-- /.add--flex -->
    </aside><!-- /.sidebar -->
</div><!-- /.wrap -->
<div class="add type-one"></div><!-- /.add type-one -->
<?php include 'footer.php'; ?>