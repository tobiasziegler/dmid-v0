<?php
/**
 * Ivory Tower's image attachment content template file.
 *
 * This is the template used for displaying image attachments.
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

<?php if ( has_excerpt() ) : // If the image has an excerpt/caption. ?>

	<?php $src = wp_get_attachment_image_src( get_the_ID(), 'full' ); ?>
	<?php echo img_caption_shortcode( array( 'align' => 'aligncenter', 'width' => esc_attr( $src[1] ), 'caption' => get_the_excerpt() ), wp_get_attachment_image( get_the_ID(), 'full', false ) ); ?>

<?php else : // If the image doesn't have a caption. ?>

	<?php echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) ); ?>

<?php endif; // End check for image caption. ?>
</div>

<?php else : // If not viewing a single attachment, display the excerpt. ?>

<div <?php hybrid_attr( 'entry-summary' ); ?>>
	<?php the_excerpt(); ?>
</div>

<?php endif; // End the single attachment check. ?>
