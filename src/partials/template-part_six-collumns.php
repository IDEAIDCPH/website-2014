<?php
/*
Template Name: Part - Six collumns
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);
?>

<div class="six-cols" style="background:blue;">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $subpage) : $post = $subpage; ?>

	<div class="block" style="width:16.66666%;float:left;">
		<?php the_post_thumbnail('six-cols'); ?>
		<h4><?php echo $subpage->post_title; ?></h4>
		<?php echo wpautop($subpage->post_content); ?>
	</div>

<?php endforeach; ?>

<div style="clear:both; width:100%"></div>

</div>