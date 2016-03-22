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
<?php $options=get_option( 'yw_options_settings' ); ?>    


<?php wp_head(); ?>
    
    <style>
#masthead {
	background-color: <?php echo $options['yw_radio_field']; ?>
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'waffle460theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">		
		<div id="logo">
			<img src="http://i.imgur.com/W5b2CTq.png"title="logo" />
		</div><!-- #header logo -->
		
		<div id="header-menu">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'waffle460theme' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>	
            </nav><!-- #site-navigation -->
		</div><!-- # header-menu -->
	</header><!-- #masthead -->
	