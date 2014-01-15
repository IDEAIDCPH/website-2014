<?php
/*
Template Name: Part - Textblocks
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);
?>

<dl class="qu-list">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $i => $subpage): continue; ?>
	
		<dt><?php echo $subpage->post_title; ?></dt>
		<dd>
			<?php echo wpautop($subpage->post_content); ?>
		</dd>

<?php endforeach; ?>
</dl>