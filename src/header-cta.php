<!doctype html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset=utf-8>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	</head>

	<body <?php body_class(); ?>>
		<header>
			<div class="grid-wrapper">
				<a href="/">
					<img class="logo-medium" 
						 src="<?php echo get_template_directory_uri(); ?>/img/logo-medium@2x.png" 
						 alt="Ideaid" 
						 width=170 
						 height=75>
				</a>
				
				<?php 
					/*wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 1,
				        'container'         => 'nav',
		                'menu_class'        => 'inline-list',
				        'fallback_cb'       => 'Walker_Main_Nav::fallback',
				        'walker'            => new Walker_Main_Nav())
				    );*/
				?>
			</div>
			<div class="grid-wrapper cta">
				<div class="one-of-two">&nbsp;</div>
				<div class="one-of-two">
					<h1>Donate your brain</h1>
					<p>...and compete to win 50.000 kr. We’re looking for the most innovative people within programming, design and ideation to help make the world a better place.</p>
					<a href="#" class="button see-through">Read more</a>
					<a href="#" class="button">Apply now</a>
				</div>
			</div>
		</header>
		<main>
			<?php load_template( TEMPLATEPATH . '/' . get_default_template(), false ); ?>
			<div class="social-buttons">
				<div class="fb-like" data-href="http://facebook.com/ideaidcph" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ideaid.org/" data-related="ideaidcph" data-hashtags="DonateYourBrain,IDEAID">Tweet</a>
			</div>

