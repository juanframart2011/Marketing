<?php 
$title = 'Cobertura';
$descripcion_seccion = '';
include( 'includes/head.php' ); 
?>
<body style="background:url('img/img1.png');">
<?
include( 'includes/header.php' );
?>

        <!-- content start -->
        <div id="content-wrapper">
            <div class="container_12">

                <div class="grid_12">
                	Contamos con oficinas operativas en las ciudades de Puebla, Querétaro y el D.F.
                    <br>
                	<img src="img/mapa.png"  />
                </div>
                
                

                    <div class="forms grid_9 omega">

                        <section id="form-newsletter" class="contact-form active">

                            <p>Por favor complete el campo requerido</p>

                            <form>
                                <fieldset>
                                    <label><span class="text-red">*</span> Nombre:</label>
                                    <input type="text" class="text" id="newsletter-name"/>
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Correo electronico:</label>
                                    <input type="email" name="email" class="text" id="newsletter-email"/>
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Empresa:</label>
                                    <input type="text" class="text" id="newsletter-name"/>
                                </fieldset>

                                <fieldset>
                                    <label><span class="text-red">*</span> Estado:</label>
                                    <input type="text" class="text" id="newsletter-name"/>
                                </fieldset>
                                
                                <fieldset>
                                    <label><span class="text-red">*</span> Comentario:</label>
                                    <textarea id="comentario" name="comentario" rows="5" style="resize:none;"></textarea>
                                </fieldset>

                                <input type="submit" class="submit btn-small" value="SUBMIT" />
                                <div class="contact-response"></div>
                            </form>
                        </section>
                    </div>
                </article>

            </div><!-- container_12 end -->
        </div><!-- content wrapper end -->
<?php include( 'includes/footer.php' ); ?>