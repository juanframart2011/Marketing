        <!-- footer wrapper start -->
        <div id="footer-wrapper">

            <div class="shadow-top"></div>

            <!-- copyright container start -->
            <section class="copyright-container">

                <div class="copyright container_12">
                    <p>
                        Copyright <span class="text-red">Test Marketing SC</span> 2014. All rights reserved.
                    </p>

                    <ul class="breadcrumbs">
                        <li<? if( $title === "Home" ){?> class="active"<? } ?> >
                            <a href="index.php">Home</a>
                        </li>
                        <li<? if( $title === "Nosotros" ){?> class="active"<? } ?> >
                            <a href="nosotros.php">Nosotros</a>
                        <li<? if( $title === "Servicios" ){?> class="active"<? } ?> >
                            <a href="servicios.php">Servicios</a>
                        </li>
                        <li<? if( $title === "Somos Expertos" ){?> class="active"<? } ?> >
                            <a href="expertos.php">Somos Expertos</a>
                        </li>
                        <li<? if( $title === "Cobertura" ){?> class="active"<? } ?> >
                            <a href="#">Cobertura</a>
                        </li>
                        <li<? if( $title === "Contacto" ){?> class="active"<? } ?> >
                            <a href="contacto.php">Contacto</a>
                        </li>
                        <li<? if( $title === "Aviso" ){?> class="active"<? } ?> >
                            <a href="contacto.php">Aviso de privacidad</a>
                        </li>
                    </ul> 
                </div>
            </section><!-- copyright container end -->
        </div><!-- footer wrapper end -->
<?
if( $title === "Home" ):
?>
        <script type="text/javascript">
            $( window ).load( function() {
				
                $( '#slider' ).nivoSlider();
            });
            
            /* ================ TWEETS SCROLL ================ */
            $( '.tweets-list-container' ).tweetscroll({
                username: 'pixel_industry', 
                time: true, 
                limit: 11, 
                replies: true, 
                position: 'append',
                date_format: 'style2',
                animation: 'slide_up',
                visible_tweets: 1
            });
        </script>
<? 
endif;
if( $title === "Contacto" || $title === "Reclutamiento" ):
?>		
        <script src="js/contacto.js"></script>
<?
endif;
?>
        <script>
            $( "#foo3" ).carouFredSel({
                items: 1,
                auto: true,
                scroll: 1,
                pagination  : "#foo3_pag"
            });
            
            //placeholder fix
            $( 'input[placeholder], textarea[placeholder]' ).placeholder();
        </script>  
    </body>
</html>

