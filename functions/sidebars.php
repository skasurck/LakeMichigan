<?php
// Register sidebars
add_action( 'widgets_init', 'fastfoodWidgetsInit' );

function fastfoodWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'Posts sidebar', 'fastfood' ),
        'id' => 'sidebar-posts',
        'description' => __( 'Widgets in this area will be shown on all posts.', 'fastfood' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Left', 'fastfood' ),
        'id' => 'sidebar-footer-left',
        'description' => __( 'Widgets for footer in left column.', 'fastfood' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Center', 'fastfood' ),
        'id' => 'sidebar-footer-center',
        'description' => __( 'Widgets for footer in center column.', 'fastfood' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Right', 'fastfood' ),
        'id' => 'sidebar-footer-right',
        'description' => __( 'Widgets for footer in right column.', 'fastfood' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );


}
