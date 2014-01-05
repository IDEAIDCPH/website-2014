<?php
/*
Template Name: Layout - 3 Collumns
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID()
);
?>

<div class="three-cols" style="background:blue;">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $subpage) : ?>
	
	<div class="col">
		<img src="<?php bloginfo('template_url'); ?>/images/food-q-g-170-170-7.jpg" alt="" />
		<p style="color:white;"><?php echo wpautop($subpage->post_content); ?></p>
	</div>

<?php endforeach; ?>

</div>