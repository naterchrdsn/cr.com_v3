<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package cr_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0 sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
