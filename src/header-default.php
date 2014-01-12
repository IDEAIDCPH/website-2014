<!doctype html>
<html>
	<head>
		<meta charset=utf-8>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	</head>

	<body>
		<header>
			<div class="grid-wrapper">
				<a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-small@2x.png" alt="Ideaid" width=91 height=40></a>
				
				<?php 
					wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 1,
				        'container'         => 'nav',
		                'menu_class'        => 'inline-list',
				        'fallback_cb'       => 'Walker_Main_Nav::fallback',
				        'walker'            => new Walker_Main_Nav())
				    );
				?>
			</div>
		</header>
		<main>
			<section class="grid-wrapper">
				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php load_template( TEMPLATEPATH . '/' . get_default_template(), false ); ?>
