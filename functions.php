<?php

/*   подключение carbon fields settings */
require get_template_directory() . '/includes/carbon-fields-settings.php';

/*   подключение настроек темы */
require get_template_directory() . '/includes/theme-settings.php';
/*   подключение области виджетов */
require get_template_directory() . '/includes/widget-areas.php';
/*   подключение скриптов и стилей */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*   подключение вспомогательные функции */
require get_template_directory() . '/includes/helpers.php';
/* menu */
require get_template_directory() . '/includes/navigations.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';
 
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/* ajax */
require get_template_directory() . '/includes/ajax.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {

	// require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-single.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';

}
/**
 * disable stock woocommerce styles
 */

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
