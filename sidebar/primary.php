<?php
/**
 * Ivory Tower's primary sidebar template.
 *
 * This is the template for the primary sidebar. It will be displayed if
 * widgets have been allocated to the primary sidebar.
 *
 * @since 0.1.0
 *
 * @package Ivory_Tower
 * @subpackage Templates
 */

if ( is_active_sidebar( 'primary' ) || has_nav_menu( 'social' ) ) : // Check whether the sidebar has any widgets assigned or there is a social menu assigned. ?>
	<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
		<?php hybrid_get_menu( 'social' ); // Loads the menu/social.php template. ?>
		<?php dynamic_sidebar( 'primary' ); // Display the primary sidebar widgets. ?>
	</aside>
<?php endif; // End the check for whether the sidebar has widgets assigned.
