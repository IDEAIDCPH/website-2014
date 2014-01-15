<?php
/*
Template Name: Home
*/

get_header('cta');

/*
Inherit "renderer.php"
*/
load_template( TEMPLATEPATH . '/renderer.php', false);

/*
Include call to action here
*/
?>
		<aside class="well center">
			<h1>What are you waiting for?</h1>
			<a href="" class="button">Apply now</a>
			<p class="subtle">... not convinced? Please <a href="">tell us why</a>.</p>
		</aside>
	</main>

<?php get_footer('default'); ?>