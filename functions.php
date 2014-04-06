<?php
/**
 * Ivory Tower theme functions and definitions.
 * 
 * Sets up the theme-specific functions and feature copnfiguration, including 
 * activating core WordPress features that are supported by the theme and using 
 * functions and extenions from the Hybrid Core framework.
 * 
 * @since		0.1.0
 * 
 * @package		Ivory_Tower
 * @subpackage	Functions
 */

/* Get the template directory and make sure it has a trailing slash. */
$ivory_tower_dir = trailingslashit( get_template_directory() );

/* Load the Hybrid Core framework and launch it. */
require_once( $ivory_tower_dir . 'hybrid-core/hybrid.php' );
new Hybrid();

/* Set up the theme early. */
add_action( 'after_setup_theme', 'ivory_tower_theme_setup', 5 );

/**
 * The main function to set up support for WordPress, Hybrid Core and
 * theme-specific functionality and settings.
 *
 * @since  0.1.0
 * @return void.
 */
function ivory_tower_theme_setup() {
	/* Configure support for WordPress theme features. */
	
	/*  Add post and comment RSS feeds to the <head>. */
	add_theme_support( 'automatic-feed-links' );
	
	/* Allow posts to use all of the post formats. */
	add_theme_support(
			'post-formats',
			array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
	);
	
	/* Use the Semantic Markup feature for HTML5 markup. */
	add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list' )
	);
	
	/* Configure support for Hybrid Core functions and extensions. */
	
	/* Load the theme's stylesheet. */
	add_theme_support(
			'hybrid-core-styles',
			array( 'style' )
	);
	
	/* Enable the custom template hierarchy for some extra override options. */
	add_theme_support( 'hybrid-core-template-hierarchy' );
	
	/* Activate the advanced image-grabbing functions. */
	add_theme_support( 'get-the-image' );
	
	/* Allow breadcrumb trails to be easily generated in the markup. */
	add_theme_support( 'breadcrumb-trail' );
	
	/* Allow nice pagination for navigating through posts/pages. */
	add_theme_support( 'loop-pagination' );
	
	/* Clean up default inline styles for easier theme control over captions. */
	add_theme_support( 'cleaner-caption' );
	
	/* Clean up output from the gallery shortcode for cleaner markup and styling. */
	add_theme_support( 'cleaner-gallery' );
	
	/* Setup action hooks. */
	add_action( 'init', 'ivory_tower_register_image_sizes', 5 );
	add_action( 'init', 'ivory_tower_register_menu', 5 );
	add_action( 'widgets_init', 'ivory_tower_register_sidebar', 5 );
	add_action( 'wp_head', 'ivory_tower_head_meta_IE', 0 );
	add_action( 'wp_enqueue_scripts', 'ivory_tower_enqueue_scripts' );
	
	/* Setup filter hooks. */
	add_filter( 'hybrid_site_description', 'ivory_tower_site_description' );
	
	/* Handle content width for embeds and images. */
	hybrid_set_content_width( 800 );
}

/**
 * Registers custom image sizes for the theme.
 * 
 * @since 0.2.0
 * @return void.
 */
function ivory_tower_register_image_sizes() {
	add_image_size( 'ivory-tower-max', 1600 );
}

/**
 * Registers the navigation menu for the theme.
 * 
 * @since  0.1.0
 * @return void.
 */
function ivory_tower_register_menu() {
	register_nav_menu( 'primary', _x( 'Primary', 'nav menu location', 'ivory-tower' ) );
}

/**
 * Registers the widget-ready sidebar for the theme.
 * 
 * @since  0.1.0
 * @return void.
 */
function ivory_tower_register_sidebar() {
	hybrid_register_sidebar(
			array(
				'id'          => 'primary',
				'name'        => _x( 'Primary', 'sidebar', 'ivory-tower' ),
				'description' => __( 'The primary sidebar comes after the main content on each page in the markup and should be used for content related to the site as a whole.', 'ivory-tower' )
				)
			);
}

/**
 * Inserts a meta tag into the HEAD to ensure IE is using its latest rendering 
 * engine. Note that this breaks validation; if this matters to you then a 
 * child theme could remove this function call.
 * 
 * @since  0.1.0
 * @return void.
 */
function ivory_tower_head_meta_IE() {
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
}

/**
 * Registers and/or enqueues scripts and styles.
 * 
 * @since  0.1.0
 * @return void.
 */
function ivory_tower_enqueue_scripts() {
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.7.0.min.js', false, '2.7.0', false );
	wp_register_script( 'fitvids', get_template_directory_uri() . '/js/vendor/jquery.fitvids.js', array( 'jquery' ), '1.0.3', true );
	wp_register_script( 'ivory-tower', get_template_directory_uri() . '/js/ivory-tower.js', array( 'fitvids' ), NULL, true );
	
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'ivory-tower' );
}

/**
 * Wraps the site description in a paragraph element instead of a heading,
 * consistent with the HTML5 spec.
 * 
 * @since  0.1.0
 * @link   http://html5doctor.com/howto-subheadings/
 * @param  string $orig The original heading-wrapped description.
 * @return string The paragraph-wrapped description.
 */
function ivory_tower_site_description( $orig ) {
	
	if ( $desc = get_bloginfo( 'description' ) ) {
		$desc = sprintf( '<p %s>%s</p>', hybrid_get_attr( 'site-description' ), $desc );
	}
	
	return $desc;
}