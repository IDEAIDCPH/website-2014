<?php

add_theme_support('menus');
register_nav_menu('primary', __('Primary Menu', 'IDEAID\'14') );

add_filter('show_admin_bar', '__return_false');

function get_default_template () {
	return "template-part_description.php";
}

?>