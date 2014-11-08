<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); if(get_bloginfo('name') != "") echo ' - ' ; bloginfo('name'); }
elseif (is_single() ) { single_post_title(); }
elseif (is_page() ) { bloginfo('name'); if(get_bloginfo('name') != "") echo ': '; single_post_title(); }
 else { wp_title('',true); } ?></title>
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   
   		<?php wp_head(); ?>
		
		<style type="text/css">
			#wrapper {
				background-image: url(<?php background_image(); ?>);
				background-color: <?php echo '#'; background_color(); ?>;
			}
			#nav #search #search-form .btn,
			#nav #nav-menu li.current-menu-item > a 
			{
				color: <?php echo '#'; background_color(); ?>;
			}
		</style>
    </head>

    <body>
    	<div id="wrapper">
			<div id="header">
				<div class="container">
					<h1 id="title"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"> <?php bloginfo('name'); ?></a></h1>
				</div>
			</div><!-- /#header -->

			<div id="nav">
				<div class="container">
				
					<ul id="social-icons">
						<li><a href="#" class="btn btn-link" id="nav-open">
							<span class="icon-hamburger">
								<span></span>
								<span></span>
								<span></span>
							</span>						
							MENU							
						</a></li>
						
						<li class="si-twitter si"><a href="#" title="Twitter" class="btn btn-link" data-rgb="52, 152, 219"><i class="fa fa-twitter"></i></a></li>
						<li class="si-youtube si"><a href="#" title="YouTube" class="btn btn-link" data-rgb="231, 76, 60"><i class="fa fa-youtube-play"></i></a></li>
						<li class="si-facebook si"><a href="#" title="Facebook" class="btn btn-link" data-rgb="59, 89, 153"><i class="fa fa-facebook"></i></a></li>
						<li class="si-google-plus si"><a href="#" title="Google+" class="btn btn-link" data-rgb="221, 75, 57"><i class="fa fa-google-plus"></i></a></li>
<!--						<li class="si-instagram si"><a href="#" title="Instagram" class="btn btn-link" data-rgb="81, 127, 164"><i class="fa fa-instagram"></i></a></li>-->
						<li class="si-github si"><a href="#" title="GitHub" class="btn btn-link" data-rgb="68, 48, 92"><i class="fa fa-github"></i></a></li>
						<li class="si-vine si"><a href="#" title="Vine" class="btn btn-link" data-rgb="0, 191, 143"><i class="fa fa-vine"></i></a></li>
						
						<li><button type="button" title="Search" id="search-toggle" class="btn btn-link"><span class="glyphicon glyphicon-search"></span></button></li>
					</ul>
					
					<div class="clearfix"></div>
					
<!--
					<ul id="nav-menu" class="hidden-sm hidden-xs">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Health</a></li>
						<li><a href="#">Ingredients</a></li>
						<li><a href="#">Superpowers</a></li>
						
						<li>
							<a href="#">I have more items</a>
							<ul>
								<li><a href="#">Ingredients</a></li>
								<li>
									<a href="#">Superpowers</a>
									<ul>
										<li><a href="#">Lucky feelings</a></li>
										<li><a href="#">Superpowers</a>
											<ul>
												<li><a href="#">And more</a></li>
												<li><a href="#">children</a></li>
												<li><a href="#">Hurray!</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="active"><a href="#">Health</a></li>
							</ul>
						</li>
					</ul>
-->
					
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'menu_class' => 'hidden-sm hidden-xs',
							'menu_id' => 'nav-menu'
						));
					?>

					<div id="search">
						<div id="search-form">
							<form class="wg-search-form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
								<div class="input-group">
									<input id="search-input" type="text" class="form-control" spellcheck="false" name="s" value="<?php echo wp_specialchars($s, 1); ?>">
									<span class="input-group-btn">
										<button id="search-btn" type="submit" class="btn "><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</form>
						</div>					
					</div><!-- /#search -->
				</div>
			</div><!-- /#nav -->
		</div><!-- /#wrapper -->