<?php
$features = get_posts(array(
	'numberposts'     => -1,
	'post_type' => 'feature',
	'orderby' => 'menu_order',
	'order' => 'ASC'
));
?>

<?php if(!empty($features)) : ?>
	<div id="site-features">
		<div class="container">
			<ul class="feature-list">
				<?php foreach($features as $i => $feature) : ?>
					<?php if($i % 3 == 0 && $i != 0) : ?><li class="clear"></li><?php endif; ?>
					<li class="feature <?php if(floor($i / 3) == floor(count($features)/3)) print 'feature-lastrow' ?>">
						<div class="icon">
							<?php $the_icon = get_post_meta($feature->ID, 'feature_icon', true); ?>
							<?php if(!empty($the_icon)) : ?>
								<img src="<?php print esc_url(get_template_directory_uri().'/images/icons/'.$the_icon.'.png') ?>" />
							<?php endif; ?>
						</div>
						<h3>
							<?php $url = get_post_meta($feature->ID, 'feature_url', true); if(!empty($url)) : ?><a href="<?php print esc_url($url) ?>"><?php endif ?>
							<?php print $feature->post_title ?>
							<?php if(!empty($url)) : ?></a><?php endif ?>
						</h3>
						<div class="clear"></div>
						<p><?php print $feature->post_excerpt ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
<?php elseif($GLOBALS['pitch_theme_settings']['demo_mode']) : get_template_part('demo/features') ?>
<?php endif; ?>