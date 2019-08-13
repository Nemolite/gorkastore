<?php 
if (! defined('ABSPATH' ) ) {
	exit;// Exit if accessed directly
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gorka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gorka' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gorka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Сайдбар магазина', 'gorka' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'gorka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	/*
	* Виджет для категории товаров
	* 
	*/
	
	register_sidebar( array(
		'name'          => esc_html__( 'Фильтр товаров', 'gorka' ),
		'id'            => 'fix-seek-category', 
		'description'   => esc_html__( 'Добавьте фильтры сюда.', 'gorka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'gorka_widgets_init' );
 ?>