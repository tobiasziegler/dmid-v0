<?php
/**
 * Ivory Tower's social menu template.
 *
 * This is the template for the social media menu. It will be displayed if 
 * items have been allocated to the social menu.
 *
 * @since 0.3.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

if ( has_nav_menu( 'social' ) ) : // Check if there's a social menu assigned. ?>
	<nav <?php hybrid_attr( 'menu', 'social' ); ?>>
		<?php wp_nav_menu(
				array(
					'theme_location'  => 'social',
					'container'       => '',
					'menu_id'         => 'menu-social-items',
					'menu_class'      => 'menu-items',
					'depth'           => 1,
					'fallback_cb'     => '',
					'items_wrap'      => '<ul id="%s" class="%s">%s</ul>'
					)
				); ?>
	</nav>
<?php endif; // End the check for a primary menu. ?>