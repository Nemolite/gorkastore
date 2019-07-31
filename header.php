<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorka
 */ 

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="main-header">

		<?php 
			/**
			* header_parts hook
			*
			* @hooked gorka_shopcart_icon - 10
			* @hooked gorka_container_start - 15
			* @hooked gorka_logo - 20
			* @hooked gorka_search - 30
			* @hooked gorka_side_nav - 40
			* @hooked gorka_container_end - 45
			* @hooked gorka_navi - 50
			* @hooked gorka_mobile_nav_icon - 60
			* @hooked gorka_modal_mobile_search - 70
			*
			*/

			do_action('header_parts'); 
		?>

	</header>
	<div id="primary" class="content-area">
