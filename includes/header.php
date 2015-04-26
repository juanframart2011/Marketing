<!-- header start -->
        <header id="header" class="clearfix">

            <!-- logo start -->
            <section id="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="logo"/>
                </a>
            </section><!-- #logo end -->

            <!-- nav container start -->
            <section id="nav-container">

                <!-- main navigation start  -->
                <nav id="nav">
                    <ul class="nav nav-list">
                        <li<? if( $title === "Home" ){?> class="active"<? } ?> >
                            <a href="index.php"<? if( $title === "Home" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-home"></i>
                                Home
                            </a>
                        </li>
                        <li<? if( $title === "Nosotros" ){?> class="active"<? } ?> >
                            <a href="nosotros.php"<? if( $title === "Nosotros" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-home"></i>
                                Nosotros
                            </a>
                            <ul>
                                <li><a href="nosotros.php#filosofia">Filosofia</a></li>
                                <li><a href="nosotros.php#mision">Misión</a></li>
                                <li><a href="nosotros.php#vision">Visión</a></li>
                            </ul>
                        </li>
                        <li<? if( $title === "Servicios" ){?> class="active"<? } ?> >
                            <a href="servicios.php"<? if( $title === "Servicios" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-star"></i>
                                Servicios
                            </a>
                        </li>
                        <li<? if( $title === "Somos Expertos" ){?> class="active"<? } ?> >
                            <a href="expertos.php"<? if( $title === "Somos Expertos" ){?> class="active"<? } ?> >
                                 <i class="icon-nav icon-map-marker"></i>
                                Somos Expertos
                            </a>
                        </li>
                        <li<? if( $title === "Cobertura" ){?> class="active"<? } ?> >
                            <a href="cobertura.php"<? if( $title === "Cobertura" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-map-marker"></i>
                                Cobertura
                            </a>
                        </li>
                        <li<? if( $title === "Reclutamiento" ){?> class="active"<? } ?> >
                            <a href="reclutamiento.php"<? if( $title === "Reclutamiento" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-comments"></i>
                                Reclutamiento
                           	</a>
                        </li>
                        <li<? if( $title === "Contacto" ){?> class="active"<? } ?> >
                            <a href="contacto.php"<? if( $title === "Contacto" ){?> class="active"<? } ?> >
                                <i class="icon-nav icon-comments"></i>
                                Contacto
                           	</a>
                        </li>
                    </ul>
                    <div align="right" style="color:black;font-size:30px;margin-top:88px;">
                    	<img src="img/slogan.png" alt="logo"/>
                    </div>
                </nav><!-- main navigation end -->

                <!-- responsive navigation start -->
                <select id="nav-responsive">
                    <option selected="" value="">Selecciona Navegación...</option>

                    <option value="index.php">Home</option>

                    <option value="nosotros.php">Nosotros</option>
                    <option value="nosotros.php#filosofia">- Filosofia</option>
                    <option value="nosotros.php#mision">- Misión</option>
                    <option value="nosotros.php#vision">- Visión</option>

                    <option value="servicios.php">Servicios</option>

                    <option value="expertos.php">Somos expertos en</option>

                    <option value="cobertura.php">Cobertura</option>

                    <option value="reclutamiento.php">Reclutamiento</option>

                    <option value="contacto.php">Contacto</option>
                </select> <!-- responsive navigation end -->

            </section><!-- nav container end -->
<?/*
            <!-- search start -->
            <section id="search">
                <form action="#" method="get">
                    <input id="search-submit" type="submit" />
                    <input id="search-bkg" type="text" placeholder="Type and press enter.." />                   
                </form>
            </section><!-- search end -->
            */?>
        </header><!-- header end -->
<?php
if( $title != "Home" ):
?>
        <!-- page-title start-->
        <section class="page-title-container">

            <!-- top shadow on container -->
            <div class="shadow-top"></div>

            <section class="page-title">
                <div class="title">
                    <h1><?= $title ?></h1>
                    <p><?= $descripcion_seccion ?></p>
                </div>

                <ul class="breadcrumbs">
                    <li>
                        Usted está aquí:
                    </li>
                    <li>
                        <a href="#">Pagina  / </a>
                    </li>
                    <li class="active">
                        <a href="<?= $title ?>.php"><?= $title ?></a>
                    </li>
                </ul>                        
            </section>

            <div class="shadow-bottom"></div>
        </section>
<?php
endif;
?>