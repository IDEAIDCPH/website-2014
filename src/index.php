<?php

get_header('default');

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
			<a href="/apply-now" class="button">Apply now</a>
			<p class="subtle">... not convinced? Please <a href="mailto:info@ideaid.org">tell us why</a>.</p>
		</aside>
	</main>

<?php get_footer('default'); ?>
