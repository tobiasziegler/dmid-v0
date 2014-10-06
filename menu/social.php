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
	<section <?php hybrid_attr( 'menu', 'social' ); ?>>
		<h3 class="widget-title"><?php echo esc_html( get_term( get_nav_menu_locations()['social'], 'nav_menu' )->name ); ?></h3>
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
	</section>
<?php endif; // End the check for a primary menu. ?>