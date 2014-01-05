<?php
/*
All mechanics to load and render subpages, is contained in this file.
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID()
);

// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $page) :
	
	global $post;
	// Change the global $post variable
	// to be the current page
	$post = $page;

	// Current template file
	$templateFile = basename(get_page_template());
	
	load_template( TEMPLATEPATH . '/' . $templateFile);

endforeach;

?>