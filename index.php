<?php

/**
 * Ivory Tower's main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link http://codex.wordpress.org/Template_Hierarchy
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
				<?php hybrid_get_content_template(); // Loads the content/*.php template. ?>
			</article>
		<?php endwhile; // End looping through posts. ?>
	<?php endif; // End the check for posts. ?>
</main>

<?php get_footer();