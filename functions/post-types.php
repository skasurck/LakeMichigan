<?php
/*
 * Define custom post type
 * Register post types: https://codex.wordpress.org/Function_Reference/register_post_type
 * Icons: https://developer.wordpress.org/resource/dashicons/
 */
 function fastfood_post_type() {
 	register_post_type( 'fastfood_slider',
 		array(
	      'labels' => array(
	        'name' => __( 'Carousel' ),
	        'singular_name' => __( 'Item' ),
	        'add_new' => __( 'Nuevo item' ),
	        'add_new_item' => __( 'Añadir nuevo item' ),
	        'edit_item' => __( 'Editar item' ),
	        'featured_image' => __( 'Imagen del slide' )
	      ),
	      'public' => true,
	      'exclude_from_search' => true,
	      'has_archive' => false,
	      'show_in_nav_menus' => false,
	      'menu_icon' => 'dashicons-slides',
	      //'rewrite' => array('slug' => 'carousel'),
	      'supports' => array('title', 'editor', 'thumbnail')

    	)
  	);
 }
 add_action( 'init', 'fastfood_post_type' );