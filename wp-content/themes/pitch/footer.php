
<div id="footer">
	<div class="pointer"></div>
	<div class="container">
		<ul class="widgets">
			<?php dynamic_sidebar('Footer') ?>
		</ul>
	</div>
</div>

<div id="copyright">
	<div class="container">
		<?php

		print str_replace(
			array('{sitename}'),
			array(get_bloginfo('name')),
			$GLOBALS['pitch_theme_settings']['footer_text']
		);
		
		if($GLOBALS['pitch_theme_settings']['attribution']){
			printf(
				__(' - Powered By %s, Theme By %s', 'pitch'),
				'<a href="http://wordpress.org">WordPress</a>',
				'<a href="http://siteorigin.com">SiteOrigin</a>'
			);
		}
		?>
	</div>
</div>

<?php wp_footer() ?>
</body>
</html>