<?php

function pitch_client_init(){
	$labels = array(
		'name' => _x('Clients', 'post type general name', 'pitch'),
		'singular_name' => _x('Portfolio', 'post type singular name', 'pitch'),
		'add_new' => _x('Add New', 'book', 'pitch'),
		'add_new_item' => __('Add New Client', 'pitch'),
		'edit_item' => __('Edit Client', 'pitch'),
		'new_item' => __('New Client', 'pitch'),
		'all_items' => __('All Clients', 'pitch'),
		'view_item' => __('View Client', 'pitch'),
		'search_items' => __('Search Clients', 'pitch'),
		'not_found' =>  __('No clients found', 'pitch'),
		'not_found_in_trash' => __('No clients found in Trash', 'pitch'),
		'parent_item_colon' => '',
		'menu_name' => __('Clients', 'pitch')
	);

	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'register_meta_box_cb' => 'pitch_client_metabox_init',
		'supports' => array( 'title', 'thumbnail', 'page-attributes')
	);

	register_post_type('client', $args);
}
add_action('init', 'pitch_client_init');

/**
 * Initialize the client meta boxes
 */
function pitch_client_metabox_init(){
	add_meta_box('client-url', __('Destination URL', 'pitch'), 'pitch_client_metabox_render', 'client', 'side');
}

/**
 * Render the client metabox
 */
function pitch_client_metabox_render($post){
	?>
	<p><label><strong><?php _e('URL', 'pitch') ?></strong></label></p>
	<p><input type="text" name="post_client_url" value="<?php print esc_attr(get_post_meta($post->ID, 'client_url', true)) ?>"></p>
	<?php
	wp_nonce_field('save', '_client_nonce');	
}

/**
 * Save the client information
 * 
 * @param $post_id
 */
function pitch_client_save_post($post_id){
	if(wp_is_post_revision($post_id)) return;
	if(empty($_REQUEST['_client_nonce']) || !wp_verify_nonce($_REQUEST['_client_nonce'], 'save')) return;

	update_post_meta($post_id, 'client_url', stripslashes($_REQUEST['post_client_url']));
}
add_action('save_post', 'pitch_client_save_post');