<!doctype html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset=utf-8>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	</head>

	<body <?php body_class(); ?>>
		<header>
			<nav>
				<div class="grid-wrapper">
					<a href="/" class="logo-medium" >
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-medium@2x.png"
							 alt="Ideaid"
							 width=170
							 height=75>
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
			<div class="grid-wrapper cta">
				<div class="one-of-two" style="float:none; margin: 0 auto;">
					<h1>Donate your brain</h1>
					<p><!--... and compete to win the grand prize.--> We’re looking for the most innovative minds within programming, design and concept development to help make the world a better place. <br>
					The event will take place in Copenhagen between February 28<sup>th</sup> - March 2<sup>nd</sup>.
</p>
					<!--<a href="#" class="button see-through">Read more</a>-->
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

