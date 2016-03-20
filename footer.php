<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package waffle460theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		
		<div id="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary',
					'menu_class' => 'foot-menu' ) ); ?>
		</div><!--#footer-menu -->
		
		<div class="info-site">
			<p class="copyright">&copy; <?php echo date('Y'); ?> 
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'waffle460theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'waffle460theme' ), 'WordPress' ); ?></a> All Rights Reserved.</p>
			<p class="credits">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'waffle460theme' ), 'waffle460theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
					
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>