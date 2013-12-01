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
	
}
