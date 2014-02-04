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
		<header>
			<nav class="dropdown">
				<div class="grid-wrapper">
					<a href="/" class="logo-medium" >
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-medium@2x.png"
							 alt="Ideaid"
							 width=170
							 height=75>
					</a>
					<a class="menu-toggle">menu</a>
					<div class="menu-collapse">
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
				</div>
			</nav>
			<div class="grid-wrapper cta">
				<div class="one-of-two video-player">
					<iframe width="100%" height="318" src="//www.youtube.com/embed/3ye_W7ZsRYM" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="one-of-two">
					<h1>Donate your brain</h1>
					<p><!--... and compete to win the grand prize.--> We’re looking for the most innovative minds within programming, design and concept development to help make the world a better place. <br>
					The event will take place in Copenhagen between February 28<sup>th</sup> - March 2<sup>nd</sup>.
</p>
					<a href="#" class="button see-through js-scroll-description">Read more</a>
					<a href="/apply-now" class="button">Apply now</a>
				</div>
			</div>
		</header>
		<main>
			<?php load_template( TEMPLATEPATH . '/' . get_default_template(), false ); ?>
			<div class="social-buttons">
				<div class="fb-like" data-href="http://facebook.com/ideaidcph" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ideaid.org" data-text="#IDEAID brings the most innovative people together to solve problems for NGOs" data-via="IDEAIDcph" data-hashtags="DonateYourBrain,cphftw">Tweet</a>
			</div>

