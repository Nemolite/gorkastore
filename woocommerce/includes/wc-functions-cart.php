<?php 
if ( ! function_exists( 'gorka_woocommerce_cart_link_fragment' ) ) {
	
	function gorka_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		gorka_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'gorka_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'gorka_woocommerce_cart_link' ) ) {
	
	function gorka_woocommerce_cart_link() {
		?>
		<a id="float-shop-cart" class="btn-floating btn-medium" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'gorka' ); ?>">
			<span class="goods-count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
			<i class="material-icons">add_shopping_cart</i> 
		</a>
		<?php
	}
}

if ( ! function_exists( 'gorka_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function gorka_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php gorka_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}
