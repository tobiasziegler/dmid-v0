<?php
/**
 * Ivory Tower's header template file.
 *
 * Loaded at the top of each of the main templates. This template file provides
 * the markup for the document HEAD and the opening BODY content. Includes
 * content derived from the HTML5 Boilerplate project.
 *
 * @since 0.1.0
 *
 * @package Ivory_Tower
 * @subpackage Templates
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php hybrid_attr( 'body' ); ?>>
		<!--[if lt IE 8]><p class="browsehappy"><?php printf( __( 'You are using an <strong>outdated</strong> browser. Please <a href="%s">upgrade your browser</a> to improve your experience.', 'ivory-tower' ), 'http://browsehappy.com/' ); ?></p><![endif]-->
		<header <?php hybrid_attr( 'header' ); ?>>
			<?php hybrid_site_title(); ?>
			<?php hybrid_site_description(); ?>
			<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>
		</header>
