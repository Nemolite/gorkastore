<?php 
defined( 'ABSPATH' ) || exit;

add_action('woocommerce_after_main_content', 'gorka_add_sidebar_only_archive', 6);
function gorka_add_sidebar_only_archive(){
	if( ! is_product() ){
		woocommerce_get_sidebar();
	}
}




/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function gorka_woocommerce_scripts() {
	wp_enqueue_style( 'gorka-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'gorka-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'gorka_woocommerce_scripts' );

add_filter('woocommerce_product_tabs', 'gorka_product_tabs');
function gorka_product_tabs($tabs){
    if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper additional-info">
		<ul class="tabs wc-tabs gorka-tabs" role="tablist">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
			</div>
		<?php endforeach; ?>
    </div>
    <?php endif; 
}
add_filter('woocommerce_product_additional_information_heading', 'gorka_heading_tab_desc_remove');
add_filter('woocommerce_product_description_heading', 'gorka_heading_tab_desc_remove');
function gorka_heading_tab_desc_remove($header){
    $header = false;
    return $header;
}
/**
 * tabs reviews sigle product
 */

add_action('woocommerce_review_gravatar_size', 'gorka_resize_gravatar');
function gorka_resize_gravatar(){
    return 70;
}
/**
 * amount items on page  - кол-во товаров на страничке
 */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

/**
 * кол-во похожих товаров на странице товара
 *
 */

add_filter( 'woocommerce_output_related_products_args', 'gorka_related_products_args' );
function gorka_related_products_args( $args ) {

$args['posts_per_page'] = 4; // количество "Похожих товаров"
$args['columns'] = 3; // количество колонок
return $args;
}



?>