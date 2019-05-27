<?php
/* 
TGM plugins required
*/
require_once get_template_directory().'/inc/tgm.php';

/* 
CMB2 plugins required
*/
require_once get_template_directory().'/inc/cmb2-b.php';

/* 
course-cat  required
*/
require_once get_template_directory().'/inc/course-cat.php';


/**
 * webuni functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webuni
 */

if ( ! function_exists( 'webuni_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webuni_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webuni, use a find and replace
		 * to change 'webuni' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webuni', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'webuni' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'webuni_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 46,
			'width'       => 136,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'webuni_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webuni_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'webuni_content_width', 640 );
}
add_action( 'after_setup_theme', 'webuni_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webuni_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webuni' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'webuni' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'webuni' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'webuni' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'webuni' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-5', 'webuni' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'webuni' ),
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'webuni_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function webuni_scripts() {
	wp_enqueue_style( 'webuni-style', get_stylesheet_uri() );

 
        
    wp_enqueue_style( 'meetup-bootstrap1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.5', 'all');
    wp_enqueue_style( 'meetup-bootstrap2', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.5', 'all');
    wp_enqueue_style( 'meetup-bootstrap3', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.5', 'all');
    wp_enqueue_style( 'meetup-bootstrap4', get_template_directory_uri() . '/css/style.css', array(), '1.5', 'all');
    wp_enqueue_style( 'meetup-bootstrap5', get_template_directory_uri() . '/img/favicon.ico', array(), '1.5', 'all');
      
  
	wp_enqueue_script( 'webuni-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'webuni-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
	wp_enqueue_script( 'webuni-skip-link-focus-fix2', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'webuni-skip-link-focus-fix3', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'webuni-skip-link-focus-fix4', get_template_directory_uri() . '/js/mixitup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'webuni-skip-link-focus-fix5', get_template_directory_uri() . '/js/circle-progress.min.js', array(), '20151215', true );
	wp_enqueue_script( 'webuni-skip-link-focus-fix6', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'webuni-skip-link-focus-fix7', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webuni_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
 
