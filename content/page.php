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
	<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php the_title(); ?></h1>
	<?php edit_post_link(); ?>
</header>

<div <?php hybrid_attr( 'entry-content' ); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</div>