<?php
/**
 * Add support to Theme Customizer
 */
function fastfood_customize_register( $wp_customize ) {
	// Add new section to Customizer
	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'FastFood Options', 'fastfood' ),
		'priority' => 130, // Before Additional CSS.
	) );

	// Display the form for change the logo on header
	$wp_customize->add_setting( 'logo_header' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_header',
            array(
                'label'      => __( 'Upload a logo for header', 'fastfood' ),
                'section'    => 'theme_options'
            )
        )
    );

    /**
     * Custom colors.
     */
    $wp_customize->add_setting( 'primary_color' , array(
        'default' => '#000000',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
    	$wp_customize,
    	'primary_color',
    	array(
    		'label'      => __( 'Primary Color', 'fastfood' ),
    		'section'    => 'theme_options',
    		'description' => __( 'Applied to the header, backgrounds and main buttons.', 'fastfood' )
    	)
    ));


    $wp_customize->add_setting( 'secondary_color' , array(
        'default' => '#ff0000',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'secondary_color',
        array(
            'label'      => __( 'Secondary Color', 'fastfood' ),
            'section'    => 'theme_options',
            'description' => __( 'Applied on menus or footer.', 'fastfood' )
        )
    ));


















    // Set input for footer copyright
    $wp_customize->add_setting( 'footer_copyright', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'footer_copyright', array(
        'label'       => __( 'Footer info', 'fastfood' ),
        'section'     => 'theme_options',
        'type'        => 'textarea',
        'description' => __( 'Copyright info in footer', 'fastfood' )
    ) );

    // Home info
	$wp_customize->add_section( 'theme_homepage', array(
		'title'    => __( 'FastFood Home', 'fastfood' ),
		'priority' => 131, // Before Additional CSS.
	) );

	// Home title
	$wp_customize->add_setting( 'home_title', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

	$wp_customize->add_control( 'home_title', array(
        'label'       => __( 'Home title', 'fastfood' ),
        'section'     => 'theme_homepage',
        'type'        => 'input'
    ) );

	// Home description
	$wp_customize->add_setting( 'home_description', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'home_description', array(
        'label'       => __( 'Home description', 'fastfood' ),
        'section'     => 'theme_homepage',
        'type'        => 'textarea'
    ) );

    // Home address title
    $wp_customize->add_setting( 'home_address_title', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'home_address_title', array(
        'label'       => __( 'Home address title', 'fastfood' ),
        'section'     => 'theme_homepage',
        'type'        => 'input'
    ) );

    // Home address
    $wp_customize->add_setting( 'home_address', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'home_address', array(
        'label'       => __( 'Home address', 'fastfood' ),
        'section'     => 'theme_homepage',
        'type'        => 'input'
    ) );

    // Home map
	$wp_customize->add_setting( 'home_map', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'home_map', array(
        'label'       => __( 'Home map URL', 'fastfood' ),
        'section'     => 'theme_homepage',
        'type'        => 'textarea',
        'description' => __( 'Get the URL from https://maps.google.com/ on share button.', 'fastfood' )
    ) );
}

add_action( 'customize_register', 'fastfood_customize_register' );