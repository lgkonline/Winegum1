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
	'before_widget' => '<div id="%1$s" class="footer-widget widget %2$s col-md-3">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',	
));

register_sidebar(array(
	'id'	=> 'sidebar',
	'name'	=> 'Sidebar',
	'description' => 'Appears on the right side of the home page.',
	'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s panel panel-default"><div class="panel-body panel-body-1">',
	'after_widget'  => '</div></div>',
	'before_title'  => '</div><div class="panel-heading"><h3 class="panel-title">',
	'after_title'   => '</h3></div><div class="panel-body panel-body-2">',	
));


/* ------------------ */
/* theme options page */
/* ------------------ */

global $social_links;
$social_links = array(
	'facebook' => array(
		'id' => 'facebook', 
		'url' => 'http://facebook.com/TTTT', 
		'label' => 'Facebook', 
		'fa_class' => 'fa-facebook',
		'rgb' => '59, 89, 153',
		'placeholder' => 'User name'
	),
	'twitter' => array(
		'id' => 'twitter', 
		'url' => 'http://twitter.com/TTTT', 
		'label' => 'Twitter', 
		'fa_class' => 'fa-twitter',
		'rgb' => '52, 152, 219',
		'placeholder' => 'User name'
	),
	'youtube' => array(
		'id' => 'youtube', 
		'url' => 'http://youtube.com/TTTT', 
		'label' => 'YouTube', 
		'fa_class' => 'fa-youtube-play',
		'rgb' => '231, 76, 60',
		'placeholder' => 'User name'
	),
	'instagram' => array(
		'id' => 'instagram', 
		'url' => 'http://instagram.com/TTTT', 
		'label' => 'Instagram', 
		'fa_class' => 'fa-instagram',
		'rgb' => '81, 127, 164',
		'placeholder' => 'User name'
	),
	'github' => array(
		'id' => 'github', 
		'url' => 'http://github.com/TTTT', 
		'label' => 'GitHub', 
		'fa_class' => 'fa-github',
		'rgb' => '68, 48, 92',
		'placeholder' => 'User name'
	),
	'vine' => array(
		'id' => 'vine', 
		'url' => 'http://vine.com/TTTT', 
		'label' => 'Vine', 
		'fa_class' => 'fa-vine',
		'rgb' => '0, 191, 143',
		'placeholder' => 'User name'
	),
	'google-plus' => array(
		'id' => 'google-plus', 
		'url' => 'http://plus.google.com/TTTT', 
		'label' => 'Google+', 
		'fa_class' => 'fa-google-plus',
		'rgb' => '221, 75, 57',
		'placeholder' => 'Google+ ID'
	),
	'deviantart' => array(
		'id' => 'deviantart', 
		'url' => 'http://TTTT.deviantart.com', 
		'label' => 'DeviantART', 
		'fa_class' => 'fa-deviantart',
		'rgb' => '191, 206, 0',
		'placeholder' => 'User name'
	),
	'tumblr' => array(
		'id' => 'tumblr', 
		'url' => 'http://TTTT.tumblr.com', 
		'label' => 'Tumblr', 
		'fa_class' => 'fa-tumblr',
		'rgb' => '51, 75, 101',
		'placeholder' => 'User name'
	),
	'twitch' => array(
		'id' => 'twitch', 
		'url' => 'http://twitch.tv/TTTT', 
		'label' => 'Twitch', 
		'fa_class' => 'fa-twitch',
		'rgb' => '100, 65, 165',
		'placeholder' => 'User name'
	),
	'dribbble' => array(
		'id' => 'dribbble', 
		'url' => 'http://dribbble.com/TTTT', 
		'label' => 'Dribbble', 
		'fa_class' => 'fa-dribbble',
		'rgb' => '201, 42, 103',
		'placeholder' => 'User name'
	),
	'reddit' => array(
		'id' => 'reddit', 
		'url' => 'http://reddit.com/user/TTTT', 
		'label' => 'reddit', 
		'fa_class' => 'fa-reddit',
		'rgb' => '206, 227, 248',
		'placeholder' => 'User name'
	),
	'vimeo' => array(
		'id' => 'vimeo', 
		'url' => 'http://vimeo.com/TTTT', 
		'label' => 'Vimeo', 
		'fa_class' => 'fa-vimeo-square',
		'rgb' => '32, 185, 235',
		'placeholder' => 'User name'
	),
	'flickr' => array(
		'id' => 'flickr', 
		'url' => 'http://www.flickr.com/people/TTTT', 
		'label' => 'Vimeo', 
		'fa_class' => 'fa-flickr',
		'rgb' => '33, 107, 214',
		'placeholder' => 'User name'
	),
);

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init(){
	register_setting( 'kb_options', 'kb_theme_options', 'kb_validate_options' );
}

// Seite in der Dashboard-Navigation erstellen
function theme_options_add_page() {
	add_theme_page('More options', 'More options', 'edit_theme_options', 'theme-optionen', 'kb_theme_options_page' ); // Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion 
}

// Optionen-Seite erstellen
function kb_theme_options_page() {
global $select_options, $radio_options;
if ( ! isset( $_REQUEST['settings-updated'] ) )
	$_REQUEST['settings-updated'] = false; ?>

<div class="wrap"> 
<?php screen_icon(); ?><h2>Theme options for <?php bloginfo('name'); ?></h2> 

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?> 
<div class="updated fade">
	<p><strong>Success!</strong></p>
</div>
<?php endif; ?>

	<form method="post" action="options.php">
		<?php settings_fields( 'kb_options' ); ?>
		<?php $options = get_option( 'kb_theme_options' ); ?>

		<table class="form-table">
			<tr valign="top">
				<th scope="row">Copyright</th>
				<td><input id="kb_theme_options[copyright]" class="regular-text" type="text" name="kb_theme_options[copyright]" value="<?php esc_attr_e( $options['copyright'] ); ?>" /></td>
			</tr> 

			<?php
			$sidebar_appearence = array(
				array('label' => 'Articles', 'id' => 'single', 'value' => 'true'),
				array('label' => 'Pages', 'id' => 'page', 'value' => 'true'),
				array('label' => 'Search results', 'id' => 'search', 'value' => 'true'),
				array('label' => 'All other templates', 'id' => 'index', 'value' => 'true')
			);
			?>

			<tr valign="top">
				<th scope="row">Sidebar appearence</th>
				<td>
				<?php foreach ($sidebar_appearence as $sa) : ?>
					<p>
						<label>
							<input 
								type="checkbox"
								id="kb_theme_options[sidebar_<?php echo $sa['id']; ?>]"
								name="kb_theme_options[sidebar_<?php echo $sa['id']; ?>]"
								value="<?php echo $sa['value']; ?>" 
								<?php
									if ($options['sidebar_' . $sa['id']] == 'true') {
										$checked = true;
									}
									else {
										$checked = false;
									}
	
									if ($checked) {
										echo 'checked';
									}
								?>
							>
							<?php echo $sa['label']; ?>
						</label>
					</p>
				<?php endforeach; ?>
				
					<hr>
				
					<p>
						<label>
							<input 
								type="checkbox" 
								id="kb_theme_options[sidebar_hide_home]"
								name="kb_theme_options[sidebar_hide_home]"
								value="true"
								<?php
									if ($options['sidebar_hide_home'] == 'true') {
										echo 'checked';
									}
								?>
							>
							Hide sidebar on the home page
						</label>
					</p>
				</td>
			</tr>   
		</table>
		
		<?php
			global $social_links;
		?>
		
		<h2>Social links</h2>
		
		
		
		<table class="form-table">
			<?php foreach ($social_links as $sl) : ?>
			<tr>
				<th scope="row"><?php echo $sl['label']; ?></th>
				<td>
					<input id="kb_theme_options[social][<?php echo $sl['id']; ?>]" class="regular-text" type="text" name="kb_theme_options[social][<?php echo $sl['id']; ?>]" value="<?php esc_attr_e( $options['social'][$sl['id']] ); ?>" placeholder="<?php echo $sl['placeholder']; ?>" />
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	
		For Google+ please use your Google+ ID. You find it in the address bar when you are on your profile:<br>
		<code>https://plus.google.com/<strong>106702260575330735862</strong>/</code>

		<!-- submit -->
		<p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern" /></p>
	</form>
</div>
<?php }

function kb_validate_options( $input ) {
	// $input['copyright'] = wp_filter_nohtml_kses( $input['copyright'] );
	return $input;
}

function winegum_social($socials) {
	global $social_links;
	
	foreach ($socials as $key => $item) : if ($item) :
	?>
	<li class="si-<?php echo $social_links[$key]['id']; ?> si">
		<a 
			href="<?php echo str_replace('TTTT', $item, $social_links[$key]['url']); ?>" 
			title="<?php echo $social_links[$key]['label']; ?>" 
			class="btn btn-link" 
			data-rgb="<?php echo $social_links[$key]['rgb']; ?>"
			target="_blank"
		>
		<i class="fa <?php echo $social_links[$key]['fa_class']; ?>"></i>
		</a>
	</li>
	<?php endif; endforeach; 	
}

function winegum_sidebar($template, $position) {
	$is_sidebar = is_active_sidebar('sidebar');
	$options = get_option('kb_theme_options');
	$show_sidebar = false;
	
	
	
	if ($template == 'home') {
		$option = $options['sidebar_hide_home'];
		
		if (is_sidebar && $option != 'true') {
			$show_sidebar = true;
		}
	}
	else {
		$option = $options['sidebar_' . $template];
		
		if (is_sidebar && $option == 'true') {
			$show_sidebar = true;
		}
	}
	
	if ($show_sidebar) {
		if ($position == 'start') {
			echo '<div class="row"><div class="col-md-9">';
		}
		elseif ($position == 'end') {
			echo '</div><div id="sidebar" class="col-md-3">';
			dynamic_sidebar( 'sidebar' );
			echo '</div>';
			echo '</div><!-- /.row -->';
		}
	}
}