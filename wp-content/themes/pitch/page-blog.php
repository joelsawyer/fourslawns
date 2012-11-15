<?php
/*
Template Name: Blog
*/

query_posts(array(
	'paged' => isset($_GET['paged']) ? $_GET['paged'] : null,
));
get_template_part('index');