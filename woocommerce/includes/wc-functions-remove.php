<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
// remove sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
// remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
// remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

 ?>