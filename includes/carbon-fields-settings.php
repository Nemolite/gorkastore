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

 // Задается логика, select - это выбор, est_header_logic - имя логики и описани
 /*
		Field::make( 'select', 'est_header_logic', 'Будет использоваться логотип?' )
			->add_options(array(
				'yes' => 'Да, буду использовать логотип',
				'no' => 'Нет, буду использовать текст',
			)),
*/
// 	Поле для загрузки картинки		
		Field::make( 'image','gorka_logo', 'Логотип ( Можно удалить и поставить новый)' )
		/*
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'est_header_logic', // логика, по которому будет работать поле
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
	*/
	
	 /*		
		Field::make( 'separator', 'header_nav_after_search', 'Меню в шапке после поиска' ),
		Field::make( 'text', 'gorka_header_way', 'Как добратся' )->set_width( 50 ),
        Field::make( 'text', 'gorka_header_account', 'Вход /Регистрация' )->set_width( 50 ),
	*/	
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