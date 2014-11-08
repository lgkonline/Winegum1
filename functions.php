<?php

register_nav_menus( array(
    'primary'   => __( 'Top primary menu', 'winegum' ),
) );

$args = array(
	'default-color' => '914c3b',
	'default-image' => '%1$s/images/default.jpg',
);
add_theme_support( 'custom-background', $args );