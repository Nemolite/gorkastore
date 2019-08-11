<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gorka
 */

get_header();
?>

	<div id="primary" class="content-area fix-content-area">
		<main id="main" class="site-main">
		

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title fix-page-title"><?php esc_html_e( '
К сожалению! Эта страница не может быть найдена.', 'gorka' ); ?></h1>
				</header><!-- .page-header -->
				
				<!-- Доработка страницы 404-->
                <div class="fix-error-404">
				    <div class="catalog-item grid item13">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/err404.jpg" width="100%" />
							<figcaption>
								<br>
								<h2>Ошибка<br><span>404</span></h2>
								<p>Может перейдете на главный</p>
								<a href="<?php echo home_url('/'); ?>">На главный</a>
							</figcaption>										
						</figure>
					</div>
				
				
				</div>
				<div class="page-content">
					<p><?php esc_html_e( 'Похоже, что ничего не было найдено. Может быть, попробуйте  поиск?', 'gorka' ); ?></p>

					<?php
					get_search_form();
                    /*
					the_widget( 'WP_Widget_Recent_Posts' );
					*/
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php // esc_html_e( 'Most Used Categories', 'gorka' ); ?></h2>
						<ul>
							<?php
							/*
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							*/
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					/*
					$gorka_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'gorka' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$gorka_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					*/
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
