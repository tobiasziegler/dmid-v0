<?php
/**
 * Ivory Tower's primary menu template.
 *
 * This is the template for the primary menu. If menu items have been allocated
 * to the primary menu.
 *
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

if ( has_nav_menu( 'primary' ) ) : // Check if there's a primary menu assigned. ?>
	<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>
		<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => '',
					'menu_id'         => 'menu-primary-items',
					'menu_class'      => 'menu-items',
					'fallback_cb'     => '',
					'items_wrap'      => '<ul id="%s" class="%s">%s</ul>'
					)
				); ?>
	</nav>
<?php endif; // End the check for a primary menu. ?>