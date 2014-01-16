<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset=utf-8>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	</head>

	<body <?php body_class(); ?>>
		<nav class="sticky">
			<div class="grid-wrapper">
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small@2x.png"
						 alt="Ideaid"
						 width=91
						 height=40>
				</a>

				<?php
					wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 1,
				        'container_class'   => 'nav-menu',
		                'menu_class'        => 'inline-list',
				        'fallback_cb'       => 'Walker_Main_Nav::fallback',
				        'walker'            => new Walker_Main_Nav())
				    );
				?>
			</div>
		</nav>
		<main>
			<?php load_template( TEMPLATEPATH . '/' . get_default_template(), false ); ?>
