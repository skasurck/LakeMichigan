<?php
// Load scripts
function load_fastfood_scripts() {
	// CSS
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'fastfood-styles', get_stylesheet_uri() );

    // JAVASCRIPT
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1');
	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/025d1f53df.js', array(), null);
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '1.12.3', true );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script( 'fastfood-scripts', get_template_directory_uri() . '/js/general.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'load_fastfood_scripts' );