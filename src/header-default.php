<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset=utf-8>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<meta name="viewport" content="width=device-width, user-scalable=no">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png" />
	    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/favicon/smalltile.png" />
	    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/favicon/mediumtile.png" />
	</head>

	<body <?php body_class(); ?>>
		<nav class="sticky dropdown">
			<div class="grid-wrapper">
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small@2x.png"
						 alt="Ideaid"
						 width=91
						 height=40>
				</a>

				<?php
					wp_nav_menu( array(
				        'menu'              => 'launch-menu',
				        'theme_location'    => 'dev',
				        'depth'             => 2,
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
