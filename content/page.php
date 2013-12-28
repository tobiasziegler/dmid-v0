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
?>

<header class="entry-header">
	<?php if ( is_page() ) : // If viewing a single page, the title doesn't need a hyperlink. ?>		
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php the_title(); ?></h1>
	<?php else : // If not viewing a single page, include the hyperlink. ?>		
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a></h1>
	<?php endif; // End the single page check. ?>
	<?php edit_post_link(); ?>
</header>

<?php if ( is_page() ) : // If a single page is being displayed, show the full content. ?>

<div <?php hybrid_attr( 'entry-content' ); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</div>

<?php else : // If not displaying a single page, display the excerpt. ?>

<div <?php hybrid_attr( 'entry-summary' ); ?>>
	<?php the_excerpt(); ?>
</div>

<?php endif; // End the single page check. ?>