<?php
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
}
// icon sopping cart
add_action('header_parts','gorka_shopcart_icon', 10);
function gorka_shopcart_icon(){
	get_template_part('/template-parts/header/shopcart-icon');
}
//start container
add_action('header_parts','gorka_container_start', 15);
function gorka_container_start(){
	?>
				<div class="container" id="head">		
				<div class="row valign-wrapper" id="header-content">
				
				
<?php
}
 // logo
add_action('header_parts','gorka_logo', 20);
function gorka_logo(){
	get_template_part('/template-parts/header/logo');
}
// search
add_action('header_parts','gorka_search', 30);
function gorka_search(){
	get_template_part('template-parts/header/search');
}
// side nav after search
add_action('header_parts','gorka_side_nav', 40);
function gorka_side_nav(){
	get_template_part('template-parts/header/header-sidenav');
}
// end container 
add_action('header_parts','gorka_container_end', 45);
function gorka_container_end(){
	?>
					</div>
			</div>
<?php
}
// main menu and mobile menu
add_action('header_parts','gorka_navi', 50);
function gorka_navi(){
	get_template_part('template-parts/header/menu');
}
// mobile navi menu
add_action('header_parts','gorka_mobile_nav_icon', 60);
function gorka_mobile_nav_icon(){
	get_template_part('template-parts/header/mobile-nav-icon');
}
// modal mobile search
add_action('header_parts','gorka_modal_mobile_search', 70);
function gorka_modal_mobile_search(){
	get_template_part('template-parts/header/modal-mobile-search');
}
?>