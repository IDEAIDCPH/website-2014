<?php

add_theme_support('menus');
register_nav_menu('primary', __('Primary Menu', 'IDEAID\'14') );

add_filter('show_admin_bar', '__return_false');

/*function get_part ($id) {
	
	switch ($id) {

		case 'paragraph' :

			$markup =
				  '<div class="paragraph">'
				. '<'
				. '</div>';

			break;

		default:
			$markup = paragraph
			break;
	}

	return $markup;
}*/

?>