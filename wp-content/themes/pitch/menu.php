<?php // You shouldn't edit this file to change Pitch's menus. Rather use WordPress' custom menu system. ?>

<ul id="<?php print esc_attr($GLOBALS['menu_args']['menu_id']) ?>">
	<?php if($GLOBALS['pitch_theme_settings']['menu_extras']) : ?>
		<li class="menu-item"><a href="<?php print esc_url(home_url()) ?>"><?php _e('Home', 'pitch') ?></a></li>
		<?php if($GLOBALS['pitch_theme_settings']['type_project']) : ?>
			<li class="menu-item"><a href="<?php print esc_url(get_post_type_archive_link('project')) ?>"><?php _e('Projects', 'pitch') ?></a></li>
		<?php endif ?>
		<li class="menu-item"><a href="<?php print esc_url(pitch_get_blogurl()) ?>"><?php _e('Blog', 'pitch') ?></a></li>
	<?php endif; ?>
	
	<?php
		wp_list_pages(array(
			'title_li' => null,
			'depth' => defined('SO_IS_PREMIUM') ? 2 : 1,
			'walker' => new Pitch_Walker_Page,
		));
	?>
	
	<div class="clear"></div>
</ul>