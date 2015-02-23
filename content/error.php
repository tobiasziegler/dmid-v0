<?php
/**
 * Ivory Tower's error template file.
 *
 * This is the template part for displaying a message that posts cannot be
 * found.
 *
 * @since 0.1.0
 *
 * @package Ivory_Tower
 * @subpackage Templates
 */
?>

<header class="entry-header">
	<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php _e( 'Nothing found', 'ivory-tower' ); ?></h1>
</header>
<div <?php hybrid_attr( 'entry-content' ); ?>>
	<p><?php _e( 'Sorry, but the content you were looking for couldn&rsquo;t be found. Maybe try a search?', 'ivory-tower' ); ?></p>
	<?php get_search_form(); ?>
</div>
