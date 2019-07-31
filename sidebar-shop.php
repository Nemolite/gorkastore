<?php
if (! defined('ABSPATH' ) ) {
	exit;// Exit if accessed directly
}


if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col s12 m2 l2 shop-sidebar">
	<?php dynamic_sidebar( 'sidebar-shop' ); ?>
</aside><!-- sidebar-shop-->
