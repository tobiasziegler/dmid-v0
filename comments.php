<?php

/**
 * Ivory Tower's comments template file.
 *
 * This is the template that contains both current comments and the comment
 * form.
 *
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section class="entry-comments">
	<?php if ( have_comments() ) : // Check if there are any comments. ?>
		<ol class="comment-list">
			<?php wp_list_comments(); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Check for paged comments. ?>
			<nav class="comments-nav">
				<?php previous_comments_link(); ?>
				<?php next_comments_link(); ?>
			</nav>
		<?php endif; // // End check for paged comments. ?>
	<?php endif; // End the check for comments. ?>
	
	<?php comment_form(); // Load the comment form. ?>
</section>