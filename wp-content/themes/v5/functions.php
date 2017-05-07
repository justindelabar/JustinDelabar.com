<?php
/**
 * v5 functions and definitions
 *
 * @package v5
 */

if ( ! function_exists( 'v5_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function v5_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on v5, use a find and replace
	 * to change 'v5' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'v5', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'v5' ),
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
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'v5_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // v5_setup
add_action( 'after_setup_theme', 'v5_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function v5_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'v5_content_width', 640 );
}
add_action( 'after_setup_theme', 'v5_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function v5_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'v5' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'v5_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function v5_scripts() {
	wp_enqueue_style( 'v5-style', get_stylesheet_uri() );

	wp_enqueue_script( 'v5-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'v5-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'v5_scripts' );

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



/**
 * Load Foundation JS.
 */

function responsive_scripts_basic()
{
    //register scripts for our theme
    wp_register_script('foundation-mod', get_template_directory_uri() . '/js/foundation/modernizr.foundation.js', array( 'jquery' ), true );
    wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation/foundation.js', true );
    wp_register_script('foundation-app', get_template_directory_uri() . '/js/foundation/app.js', true );
    wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/scroll.js', true );
    wp_enqueue_script( 'foundation-mod' );
    wp_enqueue_script( 'foundation-main' );
    wp_enqueue_script( 'foundation-app' ); 
    wp_enqueue_script( 'smooth-scroll' );     
}
add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );

/**
 * Load Foundation styles.
 */

function responsive_styles()
{
    //register styles for our theme
    wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.css', array(), 'all' );
    wp_register_style( 'foundation-icons', get_template_directory_uri() . '/css/foundation-icons.css', array(), 'all' );
    wp_register_style( 'foundation-appstyle', get_template_directory_uri() . '/css/app.css', array(), 'all');
    wp_enqueue_style( 'foundation-style' );
    wp_enqueue_style( 'foundation-icons' );
    wp_enqueue_style( 'foundation-appstyle' );
}
add_action( 'wp_enqueue_scripts', 'responsive_styles' );


function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }
    
    echo $thelist;
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);
