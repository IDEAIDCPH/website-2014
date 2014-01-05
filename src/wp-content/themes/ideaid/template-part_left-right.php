<?php
/*
Template Name: Part - Left / right
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);
?>

<div class="left-right">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $i => $subpage) : $post = $subpage; $float = ($i%2) == 0 ? 'left' : 'right'; ?>
	
	<div class="block">

		<!--<img src="<?php bloginfo('template_url'); ?>/images/food-q-g-170-170-7.jpg" alt="" style="max-width:20%;float:<?php echo $float; ?>;" />-->
		<?php the_post_thumbnail('left-right'); ?>
		
		<div style="width:80%;float:<?php echo $float; ?>;">
			<h3><?php the_title(); ?></h3>
			<?php echo wpautop($subpage->post_content); ?>
		</div>

		<div style="clear:both;width:100%;"></div>
	</div>

<?php endforeach; ?>

<div style="clear:both; width:100%"></div>

</div>