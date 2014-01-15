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
<section class="well">
	<div class="grid-wrapper">
<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $subpage) : $post = $subpage; ?>
	
		<article class="one-of-three">
			<?php the_post_thumbnail('three-cols'); ?>
			<h1><?php the_title(); ?></h1>
			<?php if(get_field('subheading'))
			 ?> <p class="subtle subheader"><?php the_field('subheading'); ?></p>
			<?php echo wpautop($subpage->post_content); ?>
		</article>

<?php endforeach; ?>
	</div>
</section>
