<?php 
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
}
?>
	<div class="col xl2 side-header-nav hide-on-med-and-down">
		<?php $header_way = carbon_get_theme_option('gorka_header_way'); ?>
		<?php $header_account = carbon_get_theme_option('gorka_header_account'); ?>
		<?php 
			$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
			if ( $myaccount_page_id ) {
				$myaccount_page_url = get_permalink( $myaccount_page_id );
			} 

		$cart_page_url = get_permalink( 50 );	
		?>
         <div class="fix-a-block">
              <p class="fix-a-header">
              	   <a href="<?php echo $cart_page_url; ?>">Корзина</a></p>
              <p class="fix-a-header">
              	   <a href="<?php echo $myaccount_page_url; ?>"><?php echo $header_account; ?>
				
			       </a>
		</p>
		</div>	
<!--
		<ul>
	
			<li class="way" ><a href="<?php echo $cart_page_url; ?>">Корзина</a></li>

			<li class="way"><a href="<?php echo $myaccount_page_url; ?>"><?php echo $header_account; ?>
				
			</a></li>
		</ul>
			-->						
	</div>
