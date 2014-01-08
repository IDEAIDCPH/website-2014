<?php
/*
All mechanics to load and render subpages, is contained in this file.
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);

// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $page):
	// Change the global $post variable
	// to be the current page
	$post = $page;

	// Current template file
	$templateFile = basename(get_page_template());
	
	// Is $templateFile empty?
	if($templateFile == '') $templateFile = get_default_template();
	
	// Load current template
	load_template( TEMPLATEPATH . '/' . $templateFile, false );

endforeach;

?>