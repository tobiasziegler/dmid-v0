<?php
/**
 * Ivory Tower's link content template file.
 *
 * This is the content template for the link post format.
 *
 * @since 0.2.0
 *
 * @package Ivory_Tower
 * @subpackage Templates
 */
?>

<header class="entry-header">
	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post, the title doesn't need a hyperlink. ?>
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php the_title(); ?></h1>
	<?php else : // If not viewing a single post, include the hyperlink. ?>
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php echo hybrid_get_the_post_format_url(); ?>"><?php the_title(); ?> →</a></h1>
	<?php endif; // End the single post check. ?>
	<address <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></address>
	<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
	<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'items_wrap' => '<ul %s><li>%s</li></ul>', 'sep' => '</li><li>' ) ); ?>
	<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', number_format_i18n( 0 ) ); ?>
	<?php edit_post_link(); ?>
</header>

<?php if ( !is_singular( get_post_type() ) ) : // If this is not a singular post, display the excerpt. ?>

<div <?php hybrid_attr( 'entry-summary' ); ?>>
	<?php the_excerpt(); ?>
</div>

<?php else : // If viewing a single post, display the full content. ?>

<div <?php hybrid_attr( 'entry-content' ); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</div>

<?php endif; // End the singular post check. ?>

<footer class="entry-meta">
	<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'items_wrap' => '<ul %s><li>%s</li></ul>', 'sep' => '</li><li>' ) ); ?>
</footer>
