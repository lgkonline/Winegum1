<?php

register_nav_menus( array(
    'primary'   => __( 'Top primary menu', 'winegum' ),
) );

$background_args = array(
	'default-color' => '914c3b',
	'default-image' => '%1$s/images/default.jpg',
);
add_theme_support( 'custom-background', $background_args );

$header_args = array(
	'width'         => 243,
	'flex-width'	=> true,
	'height'        => 52,
	'flex-height'	=> true,
	'default-image' => get_template_directory_uri().'/images/logo.png',
	'uploads'		=> true,
	'default-text-color' => 'ffffff'
);
add_theme_support( 'custom-header', $header_args );