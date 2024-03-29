<?php
/**
 * Sample Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sample_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sampletheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sampletheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sample Theme, use a find and replace
		 * to change 'sampletheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sampletheme', get_template_directory() . '/languages' );

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
				'menu-primary' => esc_html__( 'Primary', 'sampletheme' ),
				'menu-footer' => esc_html__( 'Footer', 'sampletheme' ),
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


		// search box
		add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
		function add_search_box( $items, $args ) {
			$items .= '<li class=”searchbox-position”>' . get_search_form( false ) . 
			'</li>';
			return $items;
		}

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

		/**
		 *  Add support for block styles
		 */
		add_theme_support( 'wp-block-styles' );

		/** 
		 *  Add support for wide alignment
		*/
		if ( ! is_page_template( 'templates/sidebar-right.php' ) ) {
			add_theme_support( 'align-wide' );
		}

		/** 
		 *  Add support for custom color
		*/
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => esc_attr__( 'Magenta', 'sampletheme' ),
				'slug' => 'magenta',
				'color' => '#a156b4',
			),
			array(
				'name' => esc_attr__( 'Pink', 'sampletheme' ),
				'slug' => 'pink',
				'color' => '#d086a3',
			),
			array(
				'name' => esc_attr__( 'Lightgrey', 'sampletheme' ),
				'slug' => 'lightgrey',
				'color' => '#716b6d',
			),
			array(
				'name' => esc_attr__( 'Lightpink', 'sampletheme' ),
				'slug' => 'lightpink',
				'color' => '#e2bbcb',
			),
			array(
				'name' => esc_attr__( 'Lightblue', 'sampletheme' ),
				'slug' => 'lightblue',
				'color' => '#82a2cd',
			),
			array(
				'name' => esc_attr__( 'White', 'sampletheme' ),
				'slug' => 'white',
				'color' => '#ffffff',
			),
			array(
				'name' => esc_attr__( 'Bggrey', 'sampletheme' ),
				'slug' => 'bggrey',
				'color' => '#e9eaea',
			),
		) );

		/** 
		 *  Add support for custom gradients
		*/
		add_theme_support( 
			'editor-gradient-presets',
			array()
		);

		/** 
		 *  Add support for font sizes
		*/
		add_theme_support( 
			'disable-font-sizes',
			array()
		);
		
		/** 
		 *  Add support for disable font sizes
		*/
		add_theme_support( 'disable-custom-font-sizes' );

		/** 
		 *  Add support for disable custom color palette
		*/
		add_theme_support( 'disable-custom-colors' );

		/** 
		 *  Add support for disable custom gradients
		*/
		add_theme_support( 'disable-custom-gradients' );

	}
endif;
add_action( 'after_setup_theme', 'sampletheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sampletheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sampletheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'sampletheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sampletheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sampletheme' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'sampletheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sampletheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sampletheme_scripts() {
	wp_enqueue_style( 'sampletheme-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Foundation
	// wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/assets/css/vendor/foundation.css' );
	// wp_enqueue_script( 'foundation-script', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array(), false, true );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-reply', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js' );
	
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sampletheme_scripts' );


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
 * Customizer hooks.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Customizer post types.
 */
require get_template_directory() . '/inc/post-types.php';


/**
 * Enqueuing block editor assets
 */
function sampletheme_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'editor-script',
		get_template_directory_uri() . '/assets/js/editor.js',
		array( 
			'wp-blocks', 
			'wp-dom-ready', 
			'wp-edit-post' 
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'sampletheme_enqueue_block_editor_assets' );

/**
 *  Enqueuing block assets
 */
function sampletheme_enqueue_block_assets() {
	wp_enqueue_style(
		'blocks-stylle',
		get_template_directory_uri() . '/assets/css/blocks.css'
	);
}
add_action( 'enqueue_block_assets', 'sampletheme_enqueue_block_assets' );


register_nav_menus(

	array(

		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location'
	)
); 

