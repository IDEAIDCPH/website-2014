
	<!--<span class="page-title"><?php the_title(); ?></span>-->
<?php
/*
Template Name: Part - Description
*/
if($post->post_content): ?>
	<section class="grid-wrapper">
		<p class="description"><?php echo $post->post_content; ?></p>
	</section>
<?php endif; ?>