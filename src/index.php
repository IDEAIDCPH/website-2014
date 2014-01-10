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

<div class="CTA">

	<h4>What are you waiting for?</h4>

	<a href="#">Apply now</a>

	<p>... not convinced? Please tell us why.</p>

</div>

<?php get_footer('default'); ?>