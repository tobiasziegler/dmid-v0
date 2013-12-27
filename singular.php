<?php
/**
 * Ivory Tower's singular template file.
 *
 * This is the base template for all files involving a singular content source,
 * i.e., pages, posts and attachments.
 *
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

get_header(); ?>

<main <?php hybrid_attr( 'content' ); ?>>
	<?php if ( have_posts() ) : // Initiate the loop by checking whether posts were found. ?>
		<?php while ( have_posts() ) : // Loop through the posts. ?>
			<?php the_post(); // Load the post data. ?>
			<article <?php hybrid_attr( 'post' ); ?>>
				<?php hybrid_get_content_template(); // Load the content/*.php template. ?>
				<?php comments_template(); ?>
			</article>
		<?php endwhile; // End looping through posts. ?>
	<?php else : // If no post was found. ?>
		<article <?php hybrid_attr( 'post' ); ?>>
			<?php locate_template( array( 'content/error.php' ), true ); // Load the content/error.php template. ?>
		</article>
	<?php endif; // End the check for posts. ?>
</main>

<?php get_footer();