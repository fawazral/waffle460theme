<?php
/**
Template Name: Widgetized Page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <div id="box1">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("BarOne") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box2">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("BarTwo") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("BarThree") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("BarFour") ) : ?>
                <?php endif; ?>
            </div>
            <div id="box5">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("BarFive") ) : ?>
                <?php endif; ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
