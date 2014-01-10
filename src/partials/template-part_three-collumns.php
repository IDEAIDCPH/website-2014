<?php
/*
Template Name: Part - Three collumns
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);
?>

<div class="three-cols" style="background:blue;">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $subpage) : $post = $subpage; ?>
	
	<div class="block" style="width:33%;float:left;">
		<?php the_post_thumbnail('three-cols'); ?>
		<h4><?php the_title(); ?></h4>
		<?php if(get_field('subheading')) ?><h5><?php the_field('subheading'); ?></h5>
		<?php echo wpautop($subpage->post_content); ?>
	</div>

<?php endforeach; ?>

<div style="clear:both; width:100%"></div>

</div>