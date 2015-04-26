<?php 
$title = 'Reclutamiento';
$descripcion_seccion = '';
include( 'includes/head.php' ); 
?>
<body style="background:url('img/img3.jpg');">
<?
include( 'includes/header.php' );
?>

        <!-- content start -->
        <div id="content-wrapper">
            <div class="container_12">

                <article class="contact-tab grid_12">

                    <div class="newsletter active" data-value="form-newsletter">
                        <a href="#" class="icon">
                            <span>Reclutamiento</span>
                        </a>
                    </div>

                </article>

                <article class="grid_12 contact-forms">
                   

                    <div class="forms grid_9 omega">

                        <section id="form-newsletter" class="contact-form active">

                            <p class="code-err">Por favor complete el campo requerido</p>
                            Tu currículum deberá incluir los siguientes datos como mínimo:

                            <form action="form_recibidos.php" enctype="multipart/form-data" id="form_reclutamiento" method="post" name="form_reclutamiento">
                                <fieldset>
                                    <label><span class="text-red">*</span> Nombre Completo:</label>
                                    <input type="text" class="text" id="nombre" name="nombre"/>
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Correo electronico:</label>
                                    <input type="email" name="email" class="text" id="email" name="email" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Telefono:</label>
                                    <input type="text" class="text" id="telefono" name="telefono" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red"></span> Edad:</label>
                                    <input type="text" class="text" id="edad" maxlength="2" name="edad" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Estado:</label>
                                    <input type="text" class="text" id="estado" name="estado" />
                                    <input id="tipo_form" name="tipo_form" type="hidden" value="2">
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Curriculum Con foto reciente:</label>
                                    <input type="file" class="text" id="curriculum" name="curriculum" />
                                </fieldset>

                                <input type="submit" class="submit btn-small" value="ENVIAR" />
                                <div class="contact-response"></div>
                            </form>
                        </section>
                    </div>
                </article>

            </div><!-- container_12 end -->
        </div><!-- content wrapper end -->
<?php include( 'includes/footer.php' ); ?>