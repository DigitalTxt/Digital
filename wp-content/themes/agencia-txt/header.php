<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agencia-txt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.3.1.slim.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/popper.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

 
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'agencia-txt' ); ?></a>
	 -->
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-light bg-light">
			<div class="container">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    </button>
		  		<a class="navbar-brand" href="#">Navbar</a>
		  		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		  			<?php
					wp_nav_menu( 
						array(
						'container' => false,
						'items_wrap' => '<ul id="menu-top" class="navbar-nav mr-auto mt-2 mt-lg-0">%3$s</ul>',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
		  		</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	
<div class="container">
	<div class="row">
	<div id="content" class="site-content">
