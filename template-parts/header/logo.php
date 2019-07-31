<?php 
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
}
?>

<div class="col xl4" id="main-logo">
	<?php $logo_id = carbon_get_theme_option('est_header_logo'); 
	$logo = $logo_id ? wp_get_attachment_image_url($logo_id , 'full') : '';
	$site_name = carbon_get_theme_option('est_header_site_name') ? carbon_get_theme_option('est_header_site_name') : get_bloginfo('name');
	$site_decs = carbon_get_theme_option('est_header_site_desc') ? carbon_get_theme_option('est_header_site_desc') : get_bloginfo('description');
	?>
	<?php 
		if (is_front_page() && is_home()) :
			if ($logo_id) : ?>
				<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo;?>"></a>

			<?php else : ?>
				<h1>
					<a href="<?php echo home_url('/'); ?>">
						<?php echo $site_name; ?><br><span><?php echo $site_decs; ?></span>
					</a>
				</h1>
			<?php endif; ?>

		<?php else: 
			if ($logo_id) :?> 
				<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo;?>"></a>
			<?php else: ?>
				<h1>
					<a href="<?php echo home_url('/'); ?>">
						<?php echo $site_name; ?><br><span><?php echo $site_decs; ?></span>
					</a>
				</h1>
			<?php endif; ?>
		<?php endif; ?>
</div>