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
<?php foreach(get_pages($args) as $i => $post): ?>
	<article class="media-item media-<?php echo ($i % 2 ? 'right' : 'left'); ?>">
		<div class="media">
			<?php the_post_thumbnail('left-right'); ?>
		</div>
		<div class="media-content">
			<h1><?php the_title(); ?></h1>
			<hr class="short">
			<p><?php echo wpautop($post->post_content); ?></p>
		</div>
	</article>
<?php endforeach; ?>
</section>