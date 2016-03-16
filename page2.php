<?php
/**
Template Name: Widgetized Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <div id="box1">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-top") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box2">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-bottom") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-mid") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widgetized-page-upper-mid") ) : ?>
                <?php endif; ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
