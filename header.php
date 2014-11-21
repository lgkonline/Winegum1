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
			#title-label {
				color: <?php echo '#'. get_header_textcolor(); ?>;
			}
		</style>
    </head>

    <body>
    	<div id="wrapper">
			<div id="header">
				<div class="container">
					<h1 id="title">
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" id="title-img"> 
							<?php if (get_header_textcolor() != 'blank') : ?>
							<span id="title-label"><?php bloginfo('name'); ?></span>
							<?php endif; ?>
						</a>
					</h1>
				</div>
			</div><!-- /#header -->

			<div id="nav">
				<div class="container">
				
					<ul id="social-icons">
						<li><a href="#" class="btn btn-link" id="nav-open">
							<i class="fa fa-bars"></i> MENU							
						</a></li>
						
						<?php 

						$socials = get_option('kb_theme_options')['social'];
						if (isset($socials)) {
							winegum_social($socials); 
						}
						?>
						
						<li><button type="button" title="Search" id="search-toggle" class="btn btn-link"><span class="glyphicon glyphicon-search"></span></button></li>
					</ul>
					
					
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'menu_class' => 'hidden-sm hidden-xs',
							'menu_id' => 'nav-menu',
							'fallback_cb' => false
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
		