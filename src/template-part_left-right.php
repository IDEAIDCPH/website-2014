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
<section class="media-list grid-wrapper">
<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $i => $subpage):
	$post = $subpage; 
	$class = ($i % 2 ? 'media-right' : 'media-left');
?>
	<article class="<?php echo $class; ?>">
	<?php if($i % 2): ?>
		<div class="media-content">
			<h1><?php the_title(); ?></h1>
			<hr class="short">
			<p><?php echo wpautop($subpage->post_content); ?></p>
		</div>
		<div class="media">
			<?php the_post_thumbnail('left-right'); ?>
		</div>
	<?php else: ?>
		<div class="media">
			<?php the_post_thumbnail('left-right'); ?>
		</div>
		<div class="media-content">
			<h1><?php the_title(); ?></h1>
			<hr class="short">
			<p><?php echo wpautop($subpage->post_content); ?></p>
		</div>
	<?php endif; ?>
	</article>
<?php endforeach; ?>
</section>