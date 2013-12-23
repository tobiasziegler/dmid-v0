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

<article <?php hybrid_attr( 'post' ); ?>>
	<header class="entry-header">
		<h1 <?php hybrid_attr( 'entry-title' ); ?>>Nothing found</h1>
	</header>
	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<p>Sorry, but the content you were looking for couldn't be found. Maybe try a search?</p>
		<?php get_search_form(); ?>
	</div>
</article>