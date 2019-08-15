<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


/**
 * Hook: fix-woocommerce_before_main_content.
 *
 * @hooked gorka_add_breadcrumbs - 10
 *
 *  стандартный хук woocommerce_breadcrumb отключен 
 *  смотри woocommerce/includes/wc-functions-single.php строка 4 
 *
 * @hooked gorka_woocommerce_seek_category' - 20 ()
 *
 * Функция gorka_woocommerce_seek_category в файле wc-functions-archive.php
 * папка woocommerce/includes
 *
 *  Заглушка, пустой блок
 *  @hooked fix_zero
 */

do_action('fix-woocommerce_before_main_content');


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 - remove_action
 *  (outputs opening divs for the content)
 * Данный хук удален и вместо него подключен: 
 *
 * @hooked gorka_woocommerce_wrapper_before -10 add_action
 *
 * (смотри файл woocommerce.php в паке includes)
 *
 * Функция woocommerce_output_content_wrapper в файле wc-functions-archive.php
 * папка woocommerce/includes
 *
 *
 * @hooked WC_Structured_Data::generate_website_data() - 30
 *
 * Добавлен хук
 * @hooked gorka_archive_subwrapper_start 
 * (woocommerce/includes/wc-functions-archive.php)
 *
 *
 */
do_action( 'woocommerce_before_main_content' );

?>
<!-- Начала заголовка категории-->
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	<div class="fix-woocommerce-products-header">
		<h1 class="woocommerce-products-header__title page-title fix-page-title">
		   <?php woocommerce_page_title(); ?>
		</h1>
	</div>	
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	
	
	
	?>
</header>
<!-- Завершение загловка категории-->

<!-- Товары  категории старт-->
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 *
	 * fix
	 * Следующие хуки удалены
	 * @hooked woocommerce_result_count - 20       (remove_filter)
	 * @hooked woocommerce_catalog_ordering - 30    (remove_filter)
	 *  (woocommerce/includes/wc-functions-archive.php)
	 * Вместо них добавлены хуки:
	 * 
	 * @hooked gorka_wrapper_count_and_ordering_start - 5 (add_action)
	 * @hooked gorka_wrapper_count_and_ordering_end - 40  (add_action)
	 * (woocommerce/includes/wc-functions-archive.php)
	 *
	 * @hooked gorka_woocommerce_product_columns_wrapper - 40 (add_action)
	 *  (includes/woocommerce.php)
	 *
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );
            
            /*
             *	fix		
			 *  Подключение фйла вывода товаров категории
			 */
			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 *
	 * fix
	 * @hooked gorka_woocommerce_product_columns_wrapper_close - 40
	 * (includes/woocommerce.php)
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}



/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
