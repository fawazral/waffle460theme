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

<!-- Call the options page -->
<?php $options=get_option( 'yw_options_settings' ); ?>  
<!-- Custom style from options page -->
<style>
    #colophon{   
        background-color: <?php echo $options['yw_select_field']; ?>     
    }
</style>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		
		<div id="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary',
					'menu_class' => 'foot-menu' ) ); ?>
		</div><!--#footer-menu -->
		
		<div class="info-site">
			<p class="copyright">&copy; <?php echo date('Y'); ?> Made with &lt;3 by CCT460 students. All Rights Reserved.</p>
            <p class="customtext"> 
            
               
            <?php echo $options['yw_textarea_field']; ?>
            
            
            </p>
		</div><!-- .site-info -->
					
	</footer><!-- #colophon -->
        
        
        
        <script type="text/javascript">jQuery(document).ready(function($) {    $.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/img/1234.jpg");});</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>