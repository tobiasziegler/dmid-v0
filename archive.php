<?php
/**
 * Ivory Tower's archive template file.
 *
 * This is used to display archive-type pages if nothing more specific matches 
 * a query. For example, it puts together date-based pages if no date.php file 
 * exists. If you'd like to further customize these archive views, you may 
 * create a new template file for each specific one.
 * 
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

get_header(); ?>

<main <?php hybrid_attr( 'content' ); ?>>
	<h2 <?php hybrid_attr( 'loop-title' ); ?>><?php hybrid_loop_title(); ?></h2>
	<?php if ( have_posts() ) : // Initiate the loop by checking whether posts were found. ?>
		<?php while ( have_posts() ) : // Loop through the posts. ?>
			<?php the_post(); // Load the post data. ?>
			<article <?php hybrid_attr( 'post' ); ?>>
				<?php hybrid_get_content_template(); // Load the content/*.php template. ?>
			</article>
		<?php endwhile; // End looping through posts. ?>
		<?php loop_pagination(); ?>
	<?php else : // If no posts were found. ?>
		<article <?php hybrid_attr( 'post' ); ?>>
			<?php locate_template( array( 'content/error.php' ), true ); // Load the content/error.php template. ?>
		</article>
	<?php endif; // End the check for posts. ?>
</main>

<?php hybrid_get_sidebar( 'primary' ); // Load the sidebar/primary.php template. ?>
<?php get_footer();