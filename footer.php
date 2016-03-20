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
			<p class="copyright">&copy; <?php echo date('Y'); ?> Made with &lt;3 by CCT460 students. All Rights Reserved.</p>
		</div><!-- .site-info -->
					
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>