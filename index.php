<?php 
$title = 'Home';
include( 'includes/head.php' );
?>
<body>
<?
include( 'includes/header.php' );
?>
        
        <!-- slider start -->
        <div class="slider-wrapper">

            <div class="shadow-top"></div>


            <div id="slider" class="nivoSlider home-slider">
                <img src="img/slider/slider1.jpg" alt="slider" 
                     title="#htmlcaption1"/>

                <img src="img/slider/slider2.jpg" alt="slider" 
                     title="#htmlcaption2"/>

                <img src="img/slider/slider3.jpg" alt="slider" 
                     title="#htmlcaption3"/>
            </div>



            <!-- image captions start -->
            <div id="htmlcaption1">
                <p class="nivo-caption-title">
                    Investigación de Mercados
                </p>
            </div><!-- image captions end -->

            <!-- Second image captions start -->
            <div id="htmlcaption2">
                <p class="nivo-caption-title">
                    Estrategia
                </p>
            </div><!-- image captions end -->

            <!-- Thirs image captions start -->
            <div id="htmlcaption3">
                <p class="nivo-caption-title">
                    Experiencia
                </p>
            </div><!-- image captions end -->

            <!-- slider images shadow -->
            <div class="slider-shadow"></div>

            <div class="shadow-bottom"></div>
        </div>


        <!-- content start -->
        <div id="content-wrapper">

            <div class="container_12">

                <!-- entry note start -->
                <section class="enter-note grid_12">
                    <h1>
                        Somos una <span class="text-red">agencia</span> con amplia experiencia en el ámbito de la investigación de mercados y el marketing.
                    </h1>
                    
                    <p class="light"></p>
                </section><!-- entry note end -->

                <!-- services wrapper start -->
                <ul class="services-wrap">

                    <!-- first service start -->
                    <li class="grid_3">
                        <div class="icon">
                            <a href="servicios.php#estudio" class="icon-book">Servicios</a>
                        </div>

                        <div class="service-content services-home clearfix">
                            <h5>Estudios de mercado y opinión pública</h5>
                        </div>
                    </li><!-- first service end -->

                    <!-- second service start -->
                    <li class="grid_3">
                        <div class="icon">
                            <a href="servicios.php#maquila" class="icon-tool">Servicios</a>
                        </div>

                        <div class="service-content services-home clearfix">
                            <h5>Maquila de campo y estudios de mercado</h5>
                        </div>
                    </li><!-- second service end -->

                    <!-- third service start -->
                    <li class="grid_3">
                        <div class="icon">
                            <a href="servicios.php#asesoria" class="icon-speach-bubble">Servicios</a>
                        </div>

                        <div class="service-content services-home clearfix">
                            <h5>Asesoría en investigación y marketing a Pymes</h5>
                        </div>
                    </li><!-- third service end -->

                    <!-- fourth service start -->
                    <li class="grid_3">
                        <div class="icon">
                            <a href="servicios.php#supervision" class="icon-preview">Servicios</a>
                        </div>

                        <div class="service-content services-home clearfix">
                            <h5>Supervisión, capacitación y auditorías</h5>
                        </div>
                    </li><!-- fourth service end -->
                </ul><!-- #services-wrap end -->
            </div><!-- container_12 end -->
        </div><!-- content wrapper end -->
<?php include( 'includes/footer.php' ); ?>