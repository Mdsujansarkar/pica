<?php
/**
 * pice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pice
 */
include_once( 'inc/customizer/kirki.php' );
include_once( 'inc/customizer/kirki-customozer-main.php' );
include_once( 'inc/framework/ReduxCore/framework.php' );
include_once( 'inc/framework/sample/config.php' );
include_once( 'inc/cmb2/init.php' );
include_once( 'inc/cmb2/function.php' );

if ( ! function_exists( 'pice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pice, use a find and replace
		 * to change 'pice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pice' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pice_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
	}
endif;
add_action( 'after_setup_theme', 'pice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pice_content_width', 640 );
}
add_action( 'after_setup_theme', 'pice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pice_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pice' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pice_widgets_init' );
function sujon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar one', 'sujon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sujon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widgetitle"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar two', 'sujon' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'sujon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widgetitle"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar three', 'sujon' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'sujon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widgetitle"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar four', 'sujon' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'sujon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widgetitle"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'sujon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pice_scripts() {
	
	wp_enqueue_style('pice-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('pice-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('pice-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('pice-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('pice-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
	wp_enqueue_style('pice-animated', get_template_directory_uri() . '/assets/css/animated.css');
	wp_enqueue_style('pice-defaults', get_template_directory_uri() . '/assets/css/default.css');
	wp_enqueue_style('pice-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style('pice-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('pice-stylesheet', get_stylesheet_uri() );

	wp_enqueue_script( 'pice-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.2.1.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-fontawesome', '//kit.fontawesome.com/a076d05399.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-bootstraps', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-ajax', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'pice-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pice_scripts' );

