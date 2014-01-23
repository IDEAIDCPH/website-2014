<?php

require_once('lib/WalkerMainNav.php');
require_once('application.php');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menu('primary', __('Primary Menu', 'IDEAID\'14') );
register_nav_menu('dev', __('Development Menu', 'IDEAID\'14') );

add_filter('show_admin_bar', '__return_false');

add_image_size('left-right', 200, 155, true);
add_image_size('three-cols', 370, 170, true);
add_image_size('six-cols', 170, 100, false);

function get_default_template () {
	return "template-part_description.php";
}

function get_sponsors () {
	global $post;

	$thispage = $post;

	$result = new WP_Query('pagename=sponsor-list');

	$lookup = array(
		'post_parent' => $result->post->ID,
		'post_type'   => 'page',
		'order' => 'ASC',
		'orderby' => 'menu_order'
	);

	return get_children($lookup);
}

?>