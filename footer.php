<?php
/**
 * Ivory Tower's footer template file.
 *
 * Loaded at the end of each of the main templates. This template file provides 
 * the markup for final BODY content and closing tags.
 *
 * @since 0.1.0
 * 
 * @package Ivory_Tower
 * @subpackage Templates
 */
?>

	<?php hybrid_get_sidebar( 'primary' ); // Load the sidebar/primary.php template. ?>
	<footer <?php hybrid_attr( 'footer' ); ?>>
		<p class="site-credits">
			<?php printf(
					__( 'Powered by %1$s and %2$s.', 'ivory-tower' ),
					hybrid_get_wp_link(),
					hybrid_get_theme_link()
					); ?>
		</p>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>