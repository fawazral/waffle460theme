<?php
/**
 * waffle460theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package waffle460theme
 */

if ( ! function_exists( 'waffle460theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function waffle460theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on waffle460theme, use a find and replace
	 * to change 'waffle460theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'waffle460theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'waffle460theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'waffle460theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'waffle460theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function waffle460theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'waffle460theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'waffle460theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function waffle460theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'waffle460theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'waffle460theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function waffle460theme_scripts() {
	wp_enqueue_style( 'waffle460theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'waffle460theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'waffle460theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'waffle460theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



function enqueueitems(){
    wp_enqueue_script('my-scripts', get_stylesheet_directory_uri() .'/js/scripts.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Candal', false );
    wp_enqueue_style( 'google-font2', 'https://fonts.googleapis.com/css?family=Montserrat', false );
    wp_enqueue_script('back', get_stylesheet_directory_uri() .'/js/backstretch.js', array('jquery'), '2.0.4', true );
}

add_action( 'wp_enqueue_scripts', 'enqueueitems' );

require get_stylesheet_directory() .'/inc/options.php';


if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'id' => 'InfoBar',
'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
'after_widget' => '</li></ul>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}
    
    
register_sidebars( 1,
array(
'id' => 'MainBar',
'name' => 'BarOne',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>'
));

register_sidebars( 1,
array(
'id' => 'bar1',
'name' => 'BarTwo',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>'
));

register_sidebars( 1,
array(
'id' => 'bar2',
'name' => 'BarThree',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>'
));

register_sidebars( 1,
array(
'id' => 'bar3',
'name' => 'BarFour',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>'
));