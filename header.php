<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package waffle460theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'waffle460theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">		
		<div id="logo">
<<<<<<< HEAD
			echo '<img src="http://imgur.com/Ew6KbuP" title="logo" width="350" height="150"/>';
=======
			<img src="http://imgur.com/Ew6KbuP.png" title="logo" />
>>>>>>> origin/master
		</div><!-- #header logo -->
		
		<div id="header-menu">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'waffle460theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>	
		</nav><!-- #site-navigation -->
		</div><!-- # header-menu -->
	</header><!-- #masthead -->
	