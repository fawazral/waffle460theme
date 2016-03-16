<?php
/**
Template Name: Widgetized Page
 */



get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-top") ) : ?>
<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-bottom") ) : ?>
<?php endif; ?>
            
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-mid") ) : ?>
<?php endif; ?>
            
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-upper-mid") ) : ?>
<?php endif; ?>
            
            
            
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
