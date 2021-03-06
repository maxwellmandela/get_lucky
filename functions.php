<?php
/**
 * get_lucky functions and definitions
 *
 * @package get_lucky
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'get_lucky_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function get_lucky_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on get_lucky, use a find and replace
	 * to change 'get_lucky' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'get_lucky', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'get_lucky' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'get_lucky_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // get_lucky_setup
add_action( 'after_setup_theme', 'get_lucky_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function get_lucky_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'get_lucky' ),
		'id'            => 'sidebar-1',
		'description'   => 'The secondary sidebar for woocommerce only',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => __( 'Primary Sidebar', 'get_lucky' ),
		'id'            => 'primary',
		'class'         =>'',
		'description'   => 'This sidebar will be on the main page of posts',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

//footer widget areas
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'          => __( 'First Footer Widget area', 'get_lucky' ),
        'id'            => 'footer1',
        'class'         =>'First footer widget area',
        'description'   => 'For anything suitable, like newslater sign up',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'          => __( 'Second Footer Widget area', 'get_lucky' ),
        'id'            => 'footer2',
        'class'         =>'Second footer widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'          => __( 'Third Footer Widget area', 'get_lucky' ),
        'id'            => 'footer3',
        'class'         =>'Second footer widget area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}


add_action( 'widgets_init', 'get_lucky_widgets_init' );

//Post Thumbnail	
   add_theme_support( 'post-thumbnails' );

/**
 * Enqueue scripts and styles.
 */
function get_lucky_scripts() {
	wp_enqueue_style( 'get_lucky-style', get_stylesheet_uri() );

	wp_enqueue_script( 'get_lucky-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'get_lucky-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'get_lucky_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/*custom background
 * 
 */
 $defaults = array(
    'default-color'          => '#999999',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
 
/*Load the navwalker file*/
require_once('inc/wp_bootstrap_navwalker.php');

/*
 * Read more new theme
 * */
 function new_excerpt_more($more){
     global $post;
     return '...<a href="'.get_permalink($post->ID).'"><button class="btn btn-info btn-xs">Read More</button></a>';
 }
 add_filter('excerpt_more','new_excerpt_more');
 

/*
 * Override Woocommerce Checkout Fields
 * And Billing Adress Fields
 * 

 
 function custom_woocommerce_billing_fields($fields){
     $fields['billing_first_name'] = array(
     'label' => __('Name','wooothemes'),
     'placeholder' =>  __('Name','wooothemes'),
     'required' => true,
     'class' => array('billing-first-name'));
     
     
     return $fields;
 }
 
add_filter('woocommerce_billing_fields','custom_woocommerce_billing_fields');

**/
 
function custom_override_checkout_fields($fields){
    $fields['shipping']['shipping_phone'] = array(
    'label' => __('Phone','woothemes'),
    'placeholder' => _x('Phone','placeholder','woocommerce'),
    'required' => true,
    'class' => array('form-row-wide'),
    'clear' => true);
    
    
   return $fields;
}

add_filter('woocommerce_checkout_fields','custom_override_checkout_fields');