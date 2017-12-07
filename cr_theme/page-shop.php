<?php
/**
 * The template for displaying the WooCommerce main shop page.
 *
 * @package cr_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php if !(WC()->cart->get_cart_contents_count() == 0 ) { ?>
		<div class="pull-right"><a href="http://chelsearichardson.com/cart">View Cart</a></div>
		<?php } ?>
		<main id="main" class="col-xs-10 col-xs-offset-1 site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
