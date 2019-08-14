<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'fastfood-featured-image', 2000, 1200, true );

add_image_size( 'fastfood-thumbnail-avatar', 100, 100, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'fastfood' ),
	'footer' => __( 'Footer Menu', 'fastfood' ),
) );