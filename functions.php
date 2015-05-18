<?php
/**
 * kapitoshka2 functions and definitions
 *
 * @package kapitoshka2
 */

if ( ! function_exists( 'kapitoshka2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kapitoshka2_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kapitoshka2, use a find and replace
	 * to change 'kapitoshka2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kapitoshka2', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
//	register_nav_menus( array(
//		'primary' => esc_html__( 'Primary Menu', 'kapitoshka2' ),
//	) );


    register_nav_menus( array(
        'primary' => __( 'Меню в шапке', 'kapitoshka2' ),
        'footer_menu' => __( 'Меню в подвале', 'kapitoshka2' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kapitoshka2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // kapitoshka2_setup
add_action( 'after_setup_theme', 'kapitoshka2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kapitoshka2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kapitoshka2_content_width', 640 );
}
add_action( 'after_setup_theme', 'kapitoshka2_content_width', 0 );

add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Головне', 'kapitoshka2' ) );
    } endif;

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kapitoshka2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kapitoshka2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'kapitoshka2_widgets_init' );

function kapitoshka2_widgets_init2() {
    register_sidebar( array(
        'name'          => esc_html__( 'Social Widget place', 'kapitoshka2' ),
        'id'            => 'sidebar-2',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span>',
        'after_title'   => '</span>',
    ) );
}
add_action( 'widgets_init', 'kapitoshka2_widgets_init2' );

/**
 * Enqueue scripts and styles.
 */
function kapitoshka2_scripts() {
	wp_enqueue_style( 'kapitoshka2-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kapitoshka2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'kapitoshka2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kapitoshka2_scripts' );
// Register Custom Navigation Walker
require_once('lib/wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Меню в шапке', 'kapitoshka' ),
    'footer_menu' => __( 'Меню в подвале', 'kapitoshka' ),
) );



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
//require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

require_once('lib/wp_bootstrap_navwalker.php');

function my_theme_load_resources() {
    $theme_uri = get_template_directory_uri();


      wp_register_style('my_bootstrap_style', $theme_uri.'/assets/css/styles.css', false, '0.1');
      wp_enqueue_style('my_bootstrap_style');



    wp_register_script('my_theme_functions', $theme_uri.'/assets/js/vendor/bootstrap.min.js', array('jquery') );
    wp_enqueue_script('my_theme_functions');

//    wp_register_script('my_theme_mdrnz_functions', $theme_uri.'/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array('jquery') );
//    wp_enqueue_script('my_theme_mdrnz_functions');

    wp_register_script('my_them_plugins_functions', $theme_uri.'/assets/js/plugins.js', array('jquery') );
    wp_enqueue_script('my_them_plugins_functions');

//    wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU&sensor=false');
//    wp_enqueue_script('google-maps');
//
//    wp_register_script('google-jsapi','https://www.google.com/jsapi');
//    wp_enqueue_script('google-jsapi');




    //Если хотим подключить стиль или скрипт только на определённых страницах
    //if ( is_page( array(2, 3) ) ) {
    //    wp_register_script('my_theme_login', $theme_uri.'/js/login.js', array('jquery', 'my_theme_functions'), '0.1');
    //    wp_enqueue_script('my_theme_login');
    //}
}
add_action('wp_enqueue_scripts', 'my_theme_load_resources');


//
//wp_register_script('custom-js',get_stylesheet_directory_uri().'/assets/js/plugins.js',array(),NULL,true);
//wp_enqueue_script('custom-js');
//
//$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
//wp_localize_script( 'custom-js', 'directory_uri', $wnm_custom );
wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU&sensor=false');
wp_enqueue_script('google-maps');
wp_register_script('google-jsapi','https://www.google.com/jsapi');
wp_enqueue_script('google-jsapi');

//wp_register_script('custom-js',get_stylesheet_directory_uri().'/assets/js/plugins.js',array(),NULL,true);
//wp_enqueue_script('custom-js');
//
//$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
//wp_localize_script( 'custom-js', 'directory_uri', $wnm_custom );

function localize_vars() {
    return array(
        'stylesheet_directory' => get_stylesheet_directory_uri()
    );
}

wp_enqueue_script( 'my_script', get_stylesheet_directory_uri().( '/assets/js/plugins.js' ), array( 'jquery' ) );
wp_localize_script( 'my_script', 'blabla', localize_vars() );




// Register Custom Navigation Walker

