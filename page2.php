<?php
/**
Template Name: Widgetized Page
 */
/**
Assignment: Wordpress Theme
Description: Create a custom wordpres theme
Group Members: Ralph Fawaz, Stefania Diaz, Zohair Hussain
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            
            
            <!-- This page loads all the widgets and wraps each one in their own div -->
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
