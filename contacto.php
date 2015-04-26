<?php 
$title = 'Contacto';
$descripcion_seccion = '';
include( 'includes/head.php' ); 
?>
<body style="background:url('img/img2.jpg');">
<?
include( 'includes/header.php' );
?>

        <!-- content start -->
        <div id="content-wrapper">
            <div class="container_12">

                <article class="contact-tab grid_12">

                    <div class="newsletter active" data-value="form-newsletter">
                        <a href="#" class="icon">
                            <span>Comentarios</span>
                        </a>
                    </div>
                </article>

                <article class="grid_12 contact-forms">
                    <article class="grid_3 alpha contact-info">
                        
                        <div class="info">
                            <h5>Oficina central</h5>
                            <p>
                                Av. Juárez 20 despacho 43 
                                <br />
                                Col. Centro, Delegación Cuauhtémoc
                                <br />
                                México DF CP. 06050 
                            <p>
                        </div>

                        <div class="info">
                            <h5>Contactos</h5>
                            <p>
                                Conmutador: <span class="text-light">55 55108782</span>
                                <br />
                                Email: <a class="text-red" href="mailto:contacto@tmkresearch.com">contacto@tmkresearch.com</a>
                            </p>
                        </div>
                    </article>

                    <div class="forms grid_9 omega">

                        <section id="form-newsletter" class="contact-form active">

                            <p class="code-err">Por favor complete el campo requerido</p>

                            <form id="form_contacto" name="form_contacto">
                                <fieldset>
                                    <label><span class="text-red">*</span> Nombre:</label>
                                    <input type="text" class="text" id="nombre" name="nombre"/>
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Correo electronico:</label>
                                    <input type="email" name="email" class="text" id="email" name="email" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red"></span> Telefono:</label>
                                    <input type="text" class="text" id="telefono" name="telefono" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red"></span> Empresa:</label>
                                    <input type="text" class="text" id="empresa" name="empresa" />
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Estado:</label>
                                    <input type="text" class="text" id="estado" name="estado" />
                                    <input id="tipo_form" name="tipo_form" type="hidden" value="1">
                                </fieldset>
                                
                                <fieldset>
                                    <label><span class="text-red">*</span> Comentario:</label>
                                    <textarea id="comentario" name="comentario" cols="45" rows="8" style="resize:none;"></textarea>
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