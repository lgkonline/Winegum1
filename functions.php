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

register_sidebar(array(
	'id'	=> 'footer-text',
	'name'	=> 'Footer area',
	'description' => 'Appears in the footer section of the site.',
	'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',	
));

//register_sidebar(array(
//	'id'	=> 'sidebar',
//	'name'	=> 'Sidebar',
//	'description' => 'Appears on the right side of the home page.',
//	'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-default"><div class="panel-body">',
//	'after_widget'  => '</div></div>',
//	'before_title'  => '</div><div class="panel-heading"><h3 class="panel-title">',
//	'after_title'   => '</h3></div><div class="panel-body">',	
//));

register_sidebar(array(
	'id'	=> 'sidebar',
	'name'	=> 'Sidebar',
	'description' => 'Appears on the right side of the home page.',
	'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s panel panel-default"><div class="panel-body panel-body-1">',
	'after_widget'  => '</div></div>',
	'before_title'  => '</div><div class="panel-heading"><h3 class="panel-title">',
	'after_title'   => '</h3></div><div class="panel-body panel-body-2">',	
));