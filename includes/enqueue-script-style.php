<?php 
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
} 

add_action( 'wp_enqueue_scripts', 'gorka_styles' );
function gorka_styles() {
	wp_enqueue_style( 'gorka-style', get_stylesheet_uri(),  array('materialize-style') );
	wp_enqueue_style( 'materialize-style', get_template_directory_uri() . '/assets/css/materialize.css', 'null', 'all' );
	wp_enqueue_style( 'materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons',array('materialize-style'), 'null', 'all' );
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic,cyrillic-ext,latin-ext',array('materialize-style'), 'null', 'all' );
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', 'null', 'all' );
	wp_enqueue_style( 'fix', get_template_directory_uri() . '/assets/css/fix.css', 'null', 'all' );
}
add_action( 'wp_enqueue_scripts', 'gorka_scripts' );
function gorka_scripts() {
	wp_enqueue_script( 'vk-widget', 'https://vk.com/js/api/openapi.js?160;', '0');
	wp_enqueue_script( 'gorka-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'gorka-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'materialize-script', get_template_directory_uri() . '/assets/js/materialize.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'init-style', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), 'null', true);
	wp_enqueue_script( 'jquery-catslider', get_template_directory_uri() . '/assets/js/jquery.catslider.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/assets/js/modernizr.custom.63321.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), 'null');
	wp_localize_script('ajax-search', 'searchForm', array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('search-nonce')
		 ));
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 'null', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
 ?>