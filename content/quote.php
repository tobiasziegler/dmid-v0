<?php
/**
 * Ivory Tower's quote content template file.
 *
 * This is the content template for the aside post format.
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
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a></h1>
	<?php endif; // End the single post check. ?>
	<address <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></address>
	<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
	<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'items_wrap' => '<ul %s><li>%s</li></ul>', 'sep' => '</li><li>' ) ); ?>
	<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', number_format_i18n( 0 ) ); ?>
	<?php edit_post_link(); ?>
</header>

<div <?php hybrid_attr( 'entry-content' ); ?>>
	<?php the_content(); ?>
	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post, paginate where required. ?>
		<?php wp_link_pages(); ?>
	<?php endif; // End the single post check. ?>
</div>

<footer class="entry-meta">
	<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'items_wrap' => '<ul %s><li>%s</li></ul>', 'sep' => '</li><li>' ) ); ?>
</footer>
