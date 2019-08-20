<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144760691-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144760691-1');
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Estilos-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <title>
        <?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            echo wp_title('');
        } ?>
    </title>
</head>

<body>
    <section>
        <div class="container-fluid">
            <header class="header-lake">
                <nav class="navbar navbar-expand-lg nav-home">
                    <a class="navbar-brand" href="http://www.lakemichigan.mx/"><img src="<?php bloginfo('template_url'); ?>/img/24aniversario.jpg" alt="Logo lakemichigan" class="img-logo-header align-middle"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'container_id' => 'navbarNavDropdown',
                        'items_wrap' => '<ul class="navbar-nav justify-content-end ">%3$s</ul>',
                        'menu_class' => 'nav-item align-middle'
                    ));
                    ?>
                </nav>
                
            </header>
        </div>
    </section>