<?php
/**
 * Ivory Tower's page content template file.
 *
 * This is the template used for displaying content on pages. Please note that
 * this is the WordPress construct of pages and that other 'pages' on your 
 * WordPress site will use a different template.
 *
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

if ( is_page() ) : // Check if a single page is being displayed. ?>

	<header class="entry-header">
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php the_title(); ?></h1>
		<?php edit_post_link(); ?>
	</header>
	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>

<?php else : // If not displaying a single page. ?>

	<header class="entry-header">
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a></h1>
		<?php edit_post_link(); ?>
	</header>
	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php the_excerpt(); ?>
	</div>

<?php endif; // End the single page check. ?>