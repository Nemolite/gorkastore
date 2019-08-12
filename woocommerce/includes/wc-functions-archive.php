<?php
if (! defined('ABSPATH' ) ) {
	exit;// Exit if accessed directly
}

/*
* Переподключаем к другому хуку хлебные крошки
*  стандартный хук woocommerce_breadcrumb отключен 
*  смотри woocommerce/includes/wc-functions-single.php строка 4 
*/
remove_action( 'woocommerce_before_main_content', 'gorka_add_breadcrumbs', 20 );
add_action( 'fix-woocommerce_before_main_content', 'gorka_add_breadcrumbs',10);


/*
*   Блок фильтров над категорием товаров
*
*   Подвешан на хук woocommerce_before_main_content
*   Файл archive-product.php 
*
*/

add_action( 'fix-woocommerce_before_main_content', 'gorka_woocommerce_seek_category',20);

function gorka_woocommerce_seek_category() { ?>
	<div class="fix-seek fix-border-color">
	    <div class="fix-seek-header">
		     <h3><i class="fa fa-search" aria-hidden="true"></i>   Фильтр товаров</h3>
		</div>
	<h1>Блок фильтров</h1>
	</div>
<?php }

add_action( 'fix-woocommerce_before_main_content', 'fix_zero',30);

function fix_zero() { ?>

	<div class="fix-zero-block">
	    
	</div>
<?php }


/**
 * archive_wrapper_start  - 40
 * class - wc-shop-page
 */
add_action( 'woocommerce_before_main_content', 'gorka_archive_wrapper_start', 40);
function gorka_archive_wrapper_start(){
    if( ! is_product() ){
?>
    <div class="wc-shop-page container row">  
<?php
    }
}


/**
 * gorka_archive_subwrapper_start - 60
 * class - shop-grid-content
 */
add_action( 'woocommerce_before_main_content', 'gorka_archive_subwrapper_start', 60);
function gorka_archive_subwrapper_start(){
    if( ! is_product() ){
?>
        <div class="shop-grid-content col s12 m10 l10 row fix-border-color">
<?php
    }
}


/**
 * subEND
 * gorka_archive_subwrapper_end - 4 
 */
add_action( 'woocommerce_after_main_content', 'gorka_archive_subwrapper_end', 4);
function gorka_archive_subwrapper_end(){
?>
        </div><!-- shop-grid-content col m9 -->
    
<?php
}


/**
 * END
 * gorka_archive_wrapper_end - 8 
 */
add_action( 'woocommerce_after_main_content', 'gorka_archive_wrapper_end', 8);
function gorka_archive_wrapper_end(){
?>
        
    </div> <!-- container row -->
<?php
}



// remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');
// add_action( 'woocommerce_before_shop_loop', 'gorka_out_subcategories',40 );
// function gorka_out_subcategories() {
// 	$cat_out = woocommerce_output_product_categories( array(
// 		'before'    => '<ul class="row">',
// 		'after'     => '</ul>',
// 		'parent_id' => is_product_category() ? get_queried_object_id() : 0,
// 	) );
// 	return $cat_out;
// }
// add_filter( 'product_cat_class', 'gorka_add_classes_product_cat' );
// function gorka_add_classes_product_cat($classes){
// 	$classes[] = 'col s6 m4 l3 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
// return $classes;
// }



/**
 * hide shop title
 */
add_filter( 'woocommerce_show_page_title', 'gorka_hide_title_shop' );
function gorka_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}


/**
 * shop item class
 */
add_filter( 'post_class', 'gorka_add_class_loop_item' );
function gorka_add_class_loop_item( $classes ) {
	if(is_shop() || is_product_taxonomy()){
        $classes[] = 'col s12 m6 l4 gorka-shop-item';
    }
    return $classes;
}


/**
 * ------------------
 * shop item wrap
 */

/**
 * gorka_loop_product_div_open
 * class gorka-shop-prodict-card
 */
add_action('woocommerce_before_shop_loop_item', 'gorka_loop_product_div_open', 5);
function gorka_loop_product_div_open(){
    ?>
    <div class="gorka-shop-product-card">
    <?php
}
/**
 * gorka_loop_product_div_close
 * class gorka-shop-prodict-card
 */
add_action('woocommerce_after_shop_loop_item', 'gorka_loop_product_div_close', 30);
function gorka_loop_product_div_close(){
    ?>
    </div>
    <?php
}
/**
 * shop item wrap END
 * ------------------
 */

/**
 * remove star-rating loop product
 */
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

/**
 *  count results & catalog ordering 
 */

remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_action('woocommerce_before_shop_loop', 'gorka_wrapper_count_and_ordering_start', 5 );
function gorka_wrapper_count_and_ordering_start(){
    ?>
    <div class="gorka-results-and-oredering">
        <div class="gorka-results-left">
            <?php woocommerce_result_count(); ?>
        </div>
    <?php
}

add_action('woocommerce_before_shop_loop', 'gorka_wrapper_count_and_ordering_end', 40 );
function gorka_wrapper_count_and_ordering_end(){
    ?>
        <div class="gorka-ordering-right">
            <?php woocommerce_catalog_ordering(); ?>
        </div>
    </div>
    <?php
}
add_action('woocommerce_after_shop_loop', 'gorka_wrapper_pagination_start', 5 );
function gorka_wrapper_pagination_start(){
    ?>
        <div class="gorka-pagination">
    <?php
}
add_action('woocommerce_after_shop_loop', 'gorka_wrapper_pagination_end', 15 );
function gorka_wrapper_pagination_end(){
    ?>
        </div>
    <?php
}