<?php
/*se muestra el header */get_header();?>
<!--Slider-->
<section>
    <div class="contenedor-img-small">
        <img src="<?php bloginfo('template_url');?>/img/colcha-small.webp" class="img-small img-fluid center-img">
    </div>

    <div class="container-fluid img-principal ocultar-celular">

        <?php
        $args = array( 
            'post_type' => 'lake_slider',
            'posts_per_page' => 5
        );
        $loop = new WP_Query($args);

        if ($loop->have_posts()) : ?>
            <div id="lake-slider-home" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    $l = $loop->post_count;
                    for ($i = 0; $i < $l; $i++) { ?>
                        <li data-target="#lake-slider-home" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) { ?> class="active" <?php } ?>>
                        </li>
                    <?php
                }
                ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php
                    $n = 0;
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="carousel-item  <?php if ($n == 0) {
                                                        echo 'active';
                                                    } ?>">

                            <?php echo get_the_post_thumbnail($loop->ID, 'lake-slider-image'); ?>

                            <div class="carousel-caption  align-middle">

                                <?php the_content(); ?>

                            </div>

                        </div>
                        <?php
                        $n++;
                    endwhile;
                    ?>
                </div>
            </div>
        <?php
    endif;
    ?>


</section>
<!--Fin Slider-->
<!--Quienes Somos-->
<section class="container contenedor-quienes-principal">
    <div class="row">
        <div class="col-12 col-md-5 texto-quienes-principal">
            <h2 class="titulo-quienes-principal">QUIÉNES SOMOS</h2>
            <p>Lake Michigan F&D fue fundada hace más de 23 años en México y tiene su planta de diseño y confección en el Estado de México.</p>
            <p>Actualmente somos empresa líder en el mercado de ropa de cama y blancos de rellenos naturales y sintéticos hermosamente diseñados.</p>
            <p class="ocultar-celular">Nuestro nombre es símbolo de calidad, comodidad y bienestar para el hogar y la industria hotelera.</p>
            <p class="ocultar-celular">Nuestra misión es ofrecer calidad de talla internacional, con hermosos diseños en productos de cama y baño, para satisfacer al consumidor mexicano que exige y desea productos de primera, elaborados con esmero y adecuados a sus necesidades.</p>
            <p class="ocultar-celular">Nos esmeramos en cada detalle porque sabemos que al final de cada día, nuestros clientes tendrán un descanso confortable. Sus mejores sueños son nuestra meta.</p>
            <span class="mostrar-solo-celular"><a style="color: #24225E;" href="http://www.lakemichigan.mx/nosotros/">Ver mas..</a></span>
        </div>
        <div class="col-12 col-md-7">
            <img src="<?php bloginfo('template_url');?>/img/showroom2.webp" class="img-fluid" alt="">
        </div>
    </div>
</section>
<!--Fin Quienes Somos-->
<hr>
<!--Productos-->
<section class="container-fluid contenedor-productos-principal">
    <h1 class="Titulo-productos">Nuestros Productos</h1>
    <p class="text-contacto-pagPrincipal">Pensados para ti</p>
    <div class="row">
        <div class="col-12 col-md-6 texto-productos">
            <img src="<?php bloginfo('template_url');?>/img/Edredon.webp" class="img-fluid img-productos" alt="Productos de Cama">
        </div>
        <div class="col-12 col-md-6 texto-productos">
            <h3 class="sub-titulos-productos">Productos de Cama</h3>
            <p class="parrafo-productos-pagPrincipal">Nuestros edredones son diseñados y elaborados con extraordinarios materiales y las mejores técnicas de confección, fabricamos productos exclusivos de alta calidad y muy duraderos tanto en relleno natural de plumón y plumas o en fibras sintéticas (Down alternativo). Su detallada costura de lado a lado evita el desplazamiento y permite que la temperatura sea constante en todo el cuerpo, durante toda la noche.</p>
            <p class="parrafo-bold-productos-pagPrincipal">Contamos con 3 tamaños: Individual, Matrimonial-Queen y King</p>
            <a href="http://www.lakemichigan.mx/productos-de-cama/" class="btn btn-Morado btn-lg  align-middle" role="button" aria-pressed="true">Ver más</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-6 texto-productos">
            <h3 class="sub-titulos-productos">Productos de Baño</h3>
            <p class="parrafo-productos-pagPrincipal">Toallas y batas realmente suaves, agradables, esponjosas y super absorbentes en contacto con la piel. Manejamos diferentes tamaños y pesos según sus necesidades.</p>
            <p class="parrafo-bold-productos-pagPrincipal">Toalla baby, Toalla para manos, Toalla para cara, Toalla medio baño, Toalla para baño y Toalla para alberca</p>
            <a href="http://www.lakemichigan.mx/productos-de-bano/" class="btn btn-Morado btn-lg  align-middle" role="button" aria-pressed="true">Ver más</a>
        </div>
        <div class="col-12 col-md-6 texto-productos">
            <img src="<?php bloginfo('template_url');?>/img/toalla.webp" class="img-fluid img-productos" alt="Productos de Cama">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-6 texto-productos">
            <img src="<?php bloginfo('template_url');?>/img/23.webp" class="img-fluid img-productos" alt="">
        </div>
        <div class="col-12 col-md-6 texto-productos">
            <h3 class="sub-titulos-productos">Productos de Decorativos</h3>
            <p class="parrafo-productos-pagPrincipal">Dispuestos a satisfacer sus necesidades, le ofrecemos productos en distintos rellenos y gran variedad de formas. con distintas combinaciones de rellenos y en tela de diferentes calidades..</p>

            <a href="http://www.lakemichigan.mx/productos-de-decoracion/" class="btn btn-Morado btn-lg  align-middle" role="button" aria-pressed="true">Ver más</a>
        </div>
    </div>
</section>
<!--Fin Productos-->
<hr>
<!--Certificaciones-->
<section class="container contenedor-cerificaciones-pagPrincipal">
    <div class="row">
        <div class="col-12">
            <h1 class="titulo-cerificaciones-PagPrincipal">Certificaciones</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="<?php bloginfo('template_url');?>/img/cetificado1.webp" alt="">
        </div>
        <div class="col-12 col-md-4">
            <img src="<?php bloginfo('template_url');?>/img/cetificado2.webp" alt="">
        </div>
        <div class="col-12 col-md-4">
            <img src="<?php bloginfo('template_url');?>/img/cetificado3.webp" alt="">
        </div>
    </div>
</section>
<!--Fin Certificaciones-->
<hr>
<!--Contactanos-->
<section class="container-fluid contenedor-Asesoria-pagPrincipal">
    <div class="row justify-content-md-center">
        <div class="col-md-auto align-middle">
            <a href="http://www.lakemichigan.mx/contacto/" class="btn btn-Morado btn-lg  align-middle" role="button" aria-pressed="true">Asesoría personalizada previa cita</a>
        </div>
    </div>
</section>
<section class="container contenedor-contacto-pagPrincipal">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2 class="titulo-contacto-pagPrincipal">CONTÁCTANOS</h2>
            <p class="text-contacto-pagPrincipal">¿Tienes alguna pregunta? Nos encantaría saber de tí</p>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput" class="label-contacto-pag-Principal">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre completo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="label-contacto-pag-Principal">Correo Electronico</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="label-contacto-pag-Principal">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-Morado">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.6288910913454!2d-99.27047785419168!3d19.55753990054543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21c84d898f407%3A0xf942d4b2a02fe1f1!2sEsfuerzo+Campesino+100%2C+Mexico+Nuevo%2C+52966+Cd+L%C3%B3pez+Mateos%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1560309917425!5m2!1ses-419!2smx" width="100%" height="630" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!--Fin de Contactanos-->
<?php
/* se va mostrar el footer*/
get_footer();?>