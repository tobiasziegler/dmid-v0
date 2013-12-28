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

if ( is_active_sidebar( 'primary' ) ) : // Check whether the sidebar has any widgets assigned. ?>
	<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
		<?php dynamic_sidebar( 'primary' ); // Display the primary sidebar. ?>
	</aside>
<?php endif; // End the check for whether the sidebar has widgets assigned.