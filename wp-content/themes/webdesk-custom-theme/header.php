<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="navbar" role="banner">
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="https://bulma.io">
					<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
				</a>
				<button class="button navbar-burger">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
			<?php 
				if ( has_nav_menu( 'primary' ) ){
					wp_nav_menu(
						array(
							'theme_location'	=> 'primary',
							'container_class'	=> 'navbar-end navbar-menu',
							'items_wrap' 		=> '%3$s',
							'fallback_cb'		=> '',
							'walker'			=> new Bulma_Nav_Walker
						)
					);
				}
			?>
		</nav>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
