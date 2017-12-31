<?php
/**
 * Ivory Tower's attachment content template file.
 *
 * This is the template used for displaying media attachments, unless a more
 * specific template exists to override it.
 *
 * @since 0.2.0
 *
 * @package Ivory_Tower
 * @subpackage Templates
 */
?>

<header class="entry-header">
	<?php if ( is_attachment() ) : // If viewing a single attachment, the title doesn't need a hyperlink. ?>
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php the_title(); ?></h1>
	<?php else : // If not viewing a single attachment, include the hyperlink. ?>
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a></h1>
	<?php endif; // End the single attachment check. ?>
	<?php edit_post_link(); ?>
</header>

<?php if ( is_attachment() ) : // If viewing a single attachment, display the attachment and content. ?>

<div <?php hybrid_attr( 'entry-content' ); ?>>
	<?php hybrid_attachment(); // Call the function for handling non-image attachments. ?>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</div>

<?php else : // If not viewing a single attachment, display the excerpt. ?>

<div <?php hybrid_attr( 'entry-summary' ); ?>>
	<?php the_excerpt(); ?>
</div>

<?php endif; // End the single attachment check. ?>
