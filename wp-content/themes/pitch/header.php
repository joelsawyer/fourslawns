<!DOCTYPE html>
	
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); ?></title>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<?php if($GLOBALS['pitch_theme_settings']['topbar_menu']) : ?>
	<div id="topbar">
		<div class="container">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'topbar',
					'menu_id' => 'topbar-menu',
					'depth' => 2,
					'fallback_cb' => 'pitch_fallback_nav',
					'walker' => new Pitch_Walker_Nav_Menu,
				));
			?>
			<div class="clear"></div>
		</div>
	</div>
<?php endif; ?>
	
<div id="logo">
	<div class="container">
		<a href="<?php print esc_url(home_url()) ?>" title="<?php print esc_attr(get_bloginfo('name').' - '.get_bloginfo('description')); ?>" id="logo-link">
			<?php if(function_exists('get_custom_header') && !empty(get_custom_header()->url)) : ?>
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" title="<?php print esc_attr(get_bloginfo('name')) ?>" alt="<?php print esc_attr(get_bloginfo('name').' - '.get_bloginfo('description')) ?>" />
			<?php else : ?>
				<h1><?php bloginfo('name') ?></h1>
			<?php endif; ?>
		</a>
		
		<?php if($GLOBALS['pitch_theme_settings']['search_input']) get_search_form() ?>
	</div>
</div>

<div id="mainmenu" class="<?php print $GLOBALS['pitch_theme_settings']['scale_main_menu'] ? 'scaled' : '' ?>">
	<div class="container">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'main',
			'menu_id' => 'mainmenu-menu',
			'depth' => 2,
			'fallback_cb' => 'pitch_fallback_nav',
		));
		?>
	</div>
</div>