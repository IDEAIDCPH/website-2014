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

<div class="textblocks">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $i => $subpage) : $float = ($i%2) == 0 ? 'left' : 'right'; ?>
	
	<div class="block">
		<h3><?php echo $subpage->post_title; ?></h3>
		<?php echo wpautop($subpage->post_content); ?>
	</div>

<?php endforeach; ?>

<div style="clear:both; width:100%"></div>

</div>