<?php
/* customizing default colors section and adding new controls-setting too */
$wp_customize->add_section( 'colors', array(
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Colors', 'click' ),
    'panel'          => 'click-design-panel'
) );

/*Primary color*/
$wp_customize->add_setting( 'click_theme_options[click-primary-color]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['click-primary-color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'click_theme_options[click-primary-color]',
		array(
			'label'		=> __( 'Primary Color', 'click' ),
			'section'   => 'colors',
			'settings'  => 'click_theme_options[click-primary-color]',
			'type'	  	=> 'color'
		) )
);