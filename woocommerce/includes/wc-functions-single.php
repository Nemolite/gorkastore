<?php 
defined( 'ABSPATH' ) || exit;

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// in single-prodict.php
add_action('woocommerce_before_main_content', 'gorka_add_breadcrumbs', 20);
// add breadcrumbs
function gorka_add_breadcrumbs(){
	?>
	<div class="breadcrumb-wrap">
		<div class="container center valign-wrapper" id="breadcrumb_subwrap">
			<?php woocommerce_breadcrumb(); ?>
		</div>
	</div>

<?php 

}
// add wrapper 
add_action('woocommerce_before_single_product', 'gorka_wrapper_product_start', 5);
function gorka_wrapper_product_start(){
	?>
	<div class="single-section">
		<div class="container row fix-border">
		
	<?php 
}

add_action('woocommerce_after_single_product', 'gorka_wrapper_product_end', 5);
function gorka_wrapper_product_end(){
	?>
		<div>
	</div>
		
	<?php 
}

//add image section
add_action( 'woocommerce_before_single_product_summary', 'gorka_wrapper_product_image_start', 5 );
function gorka_wrapper_product_image_start() {
	?>
	<div class="col s12 m6 l4 single-left">
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'gorka_wrapper_product_image_end', 25 );
function gorka_wrapper_product_image_end() {
	?>
	</div>
	<?php
}

//add text section
add_action( 'woocommerce_before_single_product_summary', 'gorka_wrapper_product_entry_start', 30 );
function gorka_wrapper_product_entry_start() {
	?>
	<div class="col s12 m6 l7 offset-l1 single-right">
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'gorka_wrapper_product_entry_end', 5 );
function gorka_wrapper_product_entry_end() {
	?>
	</div>
	<?php
}

?>

<?php 

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
//  conten-single-prodict.php

?>