<?php
/**
 * Antilope2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Antilope2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
require_once(__DIR__ . '/CustomSearchQuery.php');

function refonte_du_projet_antilope_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Antilope2, use a find and replace
		* to change 'refonte-du-projet-antilope' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'refonte-du-projet-antilope', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'refonte-du-projet-antilope' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'refonte_du_projet_antilope_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'refonte_du_projet_antilope_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function refonte_du_projet_antilope_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'refonte_du_projet_antilope_content_width', 640 );
}
add_action( 'after_setup_theme', 'refonte_du_projet_antilope_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function refonte_du_projet_antilope_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'refonte-du-projet-antilope' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'refonte-du-projet-antilope' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'refonte_du_projet_antilope_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function refonte_du_projet_antilope_scripts() {
	wp_enqueue_style( 'refonte-du-projet-antilope-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'refonte-du-projet-antilope-style', 'rtl', 'replace' );

	wp_enqueue_script( 'refonte-du-projet-antilope-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'refonte_du_projet_antilope_scripts' );

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


//Module-----------------------------------------
register_post_type('module', [
	'label' => 'Modules',
	'labels' => [
		'name' => 'Modules',
		'singular_name' => 'Module',
	],
	'description' => 'Tous les articles qui d??crivent les modules',
	'public' => true,
	'has_archive' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-open-folder',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'module'],
]);
register_post_type('publications', [
	'label' => 'Publications',
	'labels' => [
		'name' => 'Publications',
		'singular_name' => 'Publication',
	],
	'description' => 'Toutes les publications',
	'public' => true,
	'has_archive' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-open-folder',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'module'],
]);
function dw_include(string $partial, array $variables = [])
{
	extract($variables);

	include(__DIR__ . '/partials/' . $partial . '.php');
}


function dw_get_trips($count = 20, $search = null)
{
	// 1. on instancie l'objet WP_Query
	$trips = new DW_CustomSearchQuery([
		'post_type' => 'module',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
		's' => strlen($search) ? $search : null,
	]);

	// 2. on retourne l'objet WP_Query
	return $trips;
}
/* Disable Gutenberg Block Editor */
add_filter('use_block_editor_for_post', '__return_false', 10);

