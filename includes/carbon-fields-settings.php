<?php
// carbon fields settings 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
    ->set_icon( 'dashicons-carrot' )
    //
    ->add_tab( 'Шапка', array(
    	Field::make( 'separator', 'gorka_header_logo', 'Логотип' ),

		Field::make( 'select', 'est_header_logic', 'Будет использоваться логотип?' )
			->add_options(array(
				'yes' => 'Да, буду использовать логотип',
				'no' => 'Нет, буду использовать текст',
			)),
		Field::make( 'image', 'est_header_logo', 'Логотип' )
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'est_header_logic',
					'value' => 'yes',
					'compare' => '=',
				)
			)),
		Field::make( 'text', 'est_header_site_name', 'Название сайта' )
			
			->set_default_value('Сайт')
				->set_conditional_logic(array(
					'relation' => 'AND',
					array(
						'field' => 'est_header_logic',
						'value' => 'no',
						'compare' => '=',
					)
				)),
		Field::make( 'text', 'est_header_site_desc', 'Описание сайта' )
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'est_header_logic',
					'value' => 'no',
					'compare' => '=',
				)
			))
			->set_default_value(get_bloginfo('description')),
		Field::make( 'separator', 'header_nav_after_search', 'Меню в шапке после поиска' ),
		Field::make( 'text', 'gorka_header_way', 'Как добраться' )->set_width( 50 ),
        Field::make( 'text', 'gorka_header_account', 'Вход /Регистрация' )->set_width( 50 ),
    ) )

    ->add_tab( 'Главный слайдер', array(
    	//Первый слайд
    	Field::make( 'separator', 'first_slide_separate', 'Первый слайд' ),
    	Field::make( 'image', 'first-slider-image-one', 'Картинка' )->set_width( 15 ),
		Field::make( 'text', 'first-slider-title-one', 'Заголовок' )->set_width( 42 )
			->set_default_value( 'Магазин Горка' ),
		Field::make( 'text', 'first-slider-desc-one', 'Описание' )->set_width( 42 )
			->set_default_value( 'Снаяржение и инвентарь для лыжников' ),
		//Второй слайд
		Field::make( 'separator', 'second_slide_separate', 'Второй слайд' ),
		Field::make( 'image', 'first-slider-image-two', 'Картинка' )->set_width( 15 ),
		Field::make( 'text', 'first-slider-title-two', 'Заголовок' )->set_width( 42 )
			->set_default_value( 'Бег' ),
		Field::make( 'text', 'first-slider-desc-two', 'Описание' )->set_width( 42 )
			->set_default_value( 'Обувь и аксессуары для бега' ),
		//Третий слайд
		Field::make( 'separator', 'third_slide_separate', 'Третий слайд' ),
		Field::make( 'image', 'first-slider-image-three', 'Картинка' )->set_width( 15 ),
		Field::make( 'text', 'first-slider-title-three', 'Заголовок' )->set_width( 42 )
			->set_default_value( 'Велоспорт' ),
		Field::make( 'text', 'first-slider-desc-three', 'Описание' )->set_width( 42 )
			->set_default_value( 'Велосипеды и оборудование' ),
	) )

    ->add_tab( 'Слайдер с новинками', array(
    	// Field::make( 'select', 'gorka_novelties_logic', 'Количество рубрик')
    	// 	->add_options(array(
    	// 		'1' => "1",
    	// 		'2' => "2",
    	// 		'3' => "3",
    	// 		'4' => "4" 
    	// 	)),
    	// Field::make( 'complex', 'first_cat_novelties', 'Первая рубрика новинок' )
    	// 	->set_max( 4 )
		   //  ->add_fields(array(
		   //  	Field::make( 'text', 'first_cat_name', 'Название рубрики' ),
		   //      Field::make( 'image', 'first_image_novelties' ),
		   //      Field::make( 'text', 'good_name', 'Название товара' ),
    	// 	) ),


    	Field::make( 'complex', 'second_cat_novelties', 'Рубрики новинок' )
    		->set_max( 4 )
		    ->add_fields('categories','Категории', array(
		 //    	Field::make( 'select', 'new_goods_logic', 'Будет использоваться блок?' )
			// 		->add_options(array(
			// 			'yes' => 'Да',
			// 			'no' => 'Нет',
			// )),
		    	Field::make( 'complex', 'first_good', 'Первая новинка' )
		    	->set_width( 50 )
    			->set_max( 1 )
		    	->add_fields(array(
		        	Field::make( 'image', 'first_good_logo','Картинка' ),
		        	Field::make( 'text', 'first_good_name', 'Название новинки' ),
		        	Field::make( 'text', 'first_good_price', 'Цена новинки' ),
    			) ),

		        Field::make( 'complex', 'gggh', 'Вторая новинка' )
		        ->set_width( 50 )
    			->set_max( 1 )
		    	->add_fields(array(
		        	Field::make( 'image', 'iiou' ),
		        	Field::make( 'text', 'ghnjyyyy', 'Название товара' ),
    			) ),

		        Field::make( 'complex', 'bbbbbttr', 'Третья новинка' )
		        ->set_width( 50 )
    			->set_max( 1 )
		    	->add_fields(array(
		        	Field::make( 'image', 'hdger' ),
		        	Field::make( 'text', 'xui', 'Название товара' ),
    			) ),
    			Field::make( 'complex', 'pppll', 'Четвертая новинка' )
    			->set_width( 50 )
    			->set_max( 1 )
		    	->add_fields(array(
		        	Field::make( 'image', 'wwww' ),
		        	Field::make( 'text', 'xxxx', 'Название товара' ),
    			) ),
    		) ),


    ) )

    ->add_tab( 'Подвал', array(
        Field::make( 'text', 'gorka_footer_copyright', 'Копирайт' )
        	->set_default_value('&copy; 2019 Gorka Store. Все права защищены'),
    ) );

}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'gorka_attach_theme_options' );
function gorka_attach_theme_options(){
	 // get_template_directory() . '/includes/custom-fields-options/theme-options.php';
	 get_template_directory() . '/includes/custom-fields-options/metabox.php';
};
// carbon field connect end 

?>