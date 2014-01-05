<!DOCTYPE html>
<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Daniel</title>

		<?php //wp_head(); ?>

	</head>

	<body>
	
		<nav>

			<h1>IDEAID</h1>
			<?php wp_nav_menu('primary'); ?>

		</nav>

	<div class="container">

		<h2><?php the_title(); ?></h2>

<?php load_template( TEMPLATEPATH . '/' . get_default_template(), false ); ?>