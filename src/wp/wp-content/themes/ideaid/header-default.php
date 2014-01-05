<!DOCTYPE html>
<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Daniel</title>

		<?php //wp_head(); ?>

	</head>

	<body>
	
		<nav>

			<h1>IDEAID LOGO</h1>
			<?php wp_nav_menu('primary'); ?>

		</nav>

	<div class="container">

		<h2><?php the_title(); ?></h2>

<?php the_post(); if(get_the_content()): ?>

		<div class="intro">
			<p><?php the_content('Read more...'); ?></p>
		</div>
		
<?php endif; ?>