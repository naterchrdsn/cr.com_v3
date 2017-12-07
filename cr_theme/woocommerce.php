<?php
/**
 * The template for displaying WooCommerce content.
 *
 * @package cr_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="col-xs-10 col-xs-offset-1 site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
