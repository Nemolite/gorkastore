<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorka
 */

get_header();
?>


	<main id="main" class="site-main">
				<!-- ============== first slider ============== -->
		<div class="first-slider-box valign-wrapper">
			<div class="slider container" id="SlideR">
				<ul class="slides" id="SlideS">
					<?php 
						$first_slider_image1_id = carbon_get_theme_option('first-slider-image-one');
						$first_slider_image1 = $first_slider_image1_id ? wp_get_attachment_image_url($first_slider_image1_id , 'full') : '';
						$first_slider_title1 = carbon_get_theme_option('first-slider-title-one');
						$first_slider_desc1 = carbon_get_theme_option('first-slider-desc-one');

						$first_slider_image2_id = carbon_get_theme_option('first-slider-image-two');
						$first_slider_image2 = $first_slider_image2_id ? wp_get_attachment_image_url($first_slider_image2_id , 'full') : '';
						$first_slider_title2 = carbon_get_theme_option('first-slider-title-two');
						$first_slider_desc2 = carbon_get_theme_option('first-slider-desc-two');

						$first_slider_image3_id = carbon_get_theme_option('first-slider-image-three');
						$first_slider_image3 = $first_slider_image3_id ? wp_get_attachment_image_url($first_slider_image3_id , 'full') : '';
						$first_slider_title3 = carbon_get_theme_option('first-slider-title-three');
						$first_slider_desc3 = carbon_get_theme_option('first-slider-desc-three');
					?>

					<li>
					<a href="<?php echo get_tag_link(60);?>">
						<img src="<?php echo $first_slider_image1;?>">
						<div class="caption center-align">
							<h3><?php echo $first_slider_title1; ?></h3>
							<h5 class="light grey-text text-lighten-3"><?php echo $first_slider_desc1; ?></h5>
						</div>
					</a>	
					</li>
					<li>
					    <a href="<?php echo get_tag_link(61);?>">
						<img src="<?php echo $first_slider_image2;?>">
						<div class="caption left-align">
							<h3><?php echo $first_slider_title2; ?></h3>
							<h5 class="light grey-text text-lighten-3"><?php echo $first_slider_desc2; ?></h5>
						</div>
						</a>
					</li>
					<li>
					    <a href="<?php echo get_tag_link(62);?>">
						<img src="<?php echo $first_slider_image3;?>">
						<div class="caption right-align">
							<h3><?php echo $first_slider_title3; ?></h3>
							<h5 class="light grey-text text-lighten-3"><?php echo $first_slider_desc3; ?></h5>
						</div>
						</a>
					</li>
				</ul>
			</div>

		</div> <!-- ============== first slider end ============== -->

		<!-- ============== second slider ============== -->
		<div class="second-slider-box">
			<hr>
			<div class="center second-slider-text">
				<h3>Новинки</h3>
			</div>
			
			<div class="second-slider-content container">
				<?php echo do_shortcode("[wpcs id=61]"); ?>
			</div>
			<hr>
		</div> 
			<!-- ============== second slider end ============== -->

		<!-- ========== catalog ============= -->
		<div class="catalog-bg valign-wrapper">
			<div class="container">
				<div class="catalog-text center">
					<h3>Каталог товаров</h3>
				</div>
				<br>
				<section class="catalog-section grid ">
					<div class="catalog-item grid item1">

						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/1item-wover.png" width="100%" />
							<figcaption>
								<br>
								<h2><span>Аксессуары</span></h2>
								<p>Лыжные аксессуары</p>
								<?php
                                                       
                                $category_link = get_category_link( 32 ); // 32-ID Categoryes Аксессуары
                                ?>
						
								<a href="<?php echo $category_link; ?>">Аксессуары</a>
								
							
							</figcaption>			
						</figure>

					</div>
					<div class="catalog-item grid item2">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/glasses.jpg" width="100%" />
							<figcaption>
                <br>
								<h2><span>Очки</span></h2>
								<p>Очки</p>
								<a href="<?php echo get_category_link(47);?>">Очки</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item3">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/bandan.jpg" width="100%" />
							<figcaption>
								<h2>Головные<br><span>уборы</span></h2>
								<p>Шапки, банданы, повязки</p>
								<a href="<?php echo get_category_link(46) ; ?>">Шапки, банданы</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item4">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/4item-wover.png" width="100%" />
							<figcaption>
								<br><br>
								<h2>Лыжные<br><span>Комбинезоны</span></h2>
								<p>Лыжиные комбинезоны</p>
								<a href="<?php echo get_category_link(41) ; ?>">Лыжиные комбинезоны</a>
							</figcaption>			
						</figure>
					</div>

					<div class="catalog-item grid item5">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/5item-wover.png" width="100%" />
							<figcaption>
								<h2><span>Лыжи</span> <br></h2>
								<p>Лыжи, лыжные палки, темляки</p>
								<a href="<?php echo get_category_link(34) ; ?>">Лыжи и лыжные палки</a>
							</figcaption>			
						</figure>
					</div>

					<div class="catalog-item grid item6">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/skysmaz.jpg" width="100%" />
							<figcaption>
								
								<h2>Лыжная<br><span>Смазка</span></h2>
								<p>Лыжная смазка, парафины, порошки</p>
								<a href="<?php echo get_category_link(37) ; ?>">Лыжная смазка</a>
							</figcaption>			
						</figure>
					</div>

					<div class="catalog-item grid item7">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/perchat.jpg" width="100%" />
							<figcaption>
								<h2><span>Перчатки</span></h2>
								<p>Перчатки</p>
								<a href="<?php echo get_category_link(52);?>">Перчатки</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item8">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/ski-sticks.jpg" width="100%" />
							<figcaption>
								<h2>Лыжные <br><span> Палки</span></h2>
								<p>Лыжные палки</p>
								<a href="<?php echo get_category_link(43);?>">Спортивные костюмы</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item9">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/skycrep.jpg" width="100%" />
							<figcaption>								
								<h2>Лыжные <br><span>Крепления</span></h2>
								<p>Лыжные крепления</p>
								<a href="<?php echo get_category_link(54) ; ?>">Лыжные крепления</a>
							</figcaption>

									
						</figure>
					</div>
					
					
					<div class="catalog-item grid item10">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/8item-wover.png" width="100%" />
							<figcaption>
								<h2>Лыжные<br><span>ботинки</span></h2>
								<p>Лыжная обувь</p>
								<a href="<?php echo get_category_link(35) ; ?>">Лыжные ботинки</a>
							</figcaption>
																	
						</figure>
					</div>
					<div class="catalog-item grid item11" >
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/skyfix.jpg" width="100%" />
							<figcaption>
								
								<h2>Обработка<br><span>Лыж</span></h2>
								<p>Инструменты для обработки лыж</p>
								<a href="<?php echo get_category_link(33) ; ?>">Обработка лыж</a>
							</figcaption>								
						</figure>
					</div>
					
					<div class="catalog-item grid item12">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/colpik.jpeg" width="100%" />
							<figcaption>
								<h2>Лыжероллеры и <br><span> наконечники</span></h2>
								<p>Лыжероллеры и наконечники, колеса и шлема</p>
								<a href="<?php echo get_category_link(36) ; ?>">Лыжероллерные наконечники</a>
							</figcaption>

																
						</figure>
					</div>
					
					<div class="catalog-item grid item13">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/running-suit.jpg" width="100%" />
							<figcaption>
								<br>
								<h2>Беговая <br><span>форма</span></h2>
								<p>Беговая форма, футболки и шорты</p>
								<a href="<?php echo get_category_link(38) ; ?>">Беговая форма</a>
							</figcaption>										
						</figure>
					</div>
					
					<div class="catalog-item grid item14">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/footbool.jpg" width="100%" />
							<figcaption>
								<h2>Футболки<br><span>Майки</span></h2>
								<p>Футболки, майки</p>
								<a href="<?php echo get_category_link(42) ; ?>">Футболки и майки</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item15">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/3item-wover.png" width="100%" />
							<figcaption>
								<h2><span>Сумки</span> и чехлы</h2>
								<p>Сумки, термобочки, рюкзаки, чехлы</p>
								<a href="<?php echo get_category_link(50);?>">Сумки, термобочки, рюкзаки, чехлы</a>
							</figcaption>

																	
						</figure>
					</div>

					<div class="catalog-item grid item16">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/therm-undwr.jpg" width="100%" />
							<figcaption>
								<h2><span>Термобелье</span></h2>
								<p>Термобелье и носки</p>
								<a href="<?php echo get_category_link(53);?>">Термобелье и носки</a>
							</figcaption>	
																
						</figure>
					</div>

					<div class="catalog-item grid item17">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/7item-wover.png" width="100%" />
							<figcaption>
								<br>
								<h2><span>Кроссовки</span></h2>
								<p>Кроссовки</p>
								<a href="<?php echo get_category_link(39) ; ?>">Кроссовки</a>
							</figcaption>	
																
						</figure>
					</div>

					<div class="catalog-item grid item18">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/smart-watch.jpg" width="100%" />
							<figcaption>
								<h2 id="fix-h2-fz">Часы и <span>пульсометры</span></h2>
								<p>Часы, пульсометры и смарт-браслеты</p>
								<a href="<?php echo get_category_link(48);?>">Часы, пульсометры и смарт-браслеты</a>
							</figcaption>

																	
						</figure>
					</div>

					<div class="catalog-item grid item19">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/sport-suit.jpg" width="100%" />
							<figcaption>
								<h2>Спортивные <span>костюмы,</span> одежда</h2>
								<p>Спортивные костюмы и одежда</p>
								<a href="<?php echo get_category_link(43);?>">Спортивные костюмы</a>
							</figcaption>
																	
						</figure>
					</div>

					<div class="catalog-item grid item20">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/9item-wover.png" width="100%" />
							<figcaption>
								<h2><span>Велосипеды</span></h2>
								<p>Велосипеды</p>
								<a href="<?php echo get_category_link(55);?>">Велосипеды</a>
							</figcaption>												
						</figure>
					</div>

					<div class="catalog-item grid item21">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/bike-tools.jpg" width="100%" />
							<figcaption>
								<h2 id="fix-h2-fz-velo"><span>Велоаксессуары</span></h2>
								<p>Аксессуары для велосипедов и велозапчасти</p>
								<a href="<?php echo get_category_link(45);?>">Аксессуары для велосипедов и велозапчасти</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item22">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/kurtka.jpg" width="100%" />
							<figcaption>
								<h2><span>Куртки</span></h2>
								<p>Куртки и тепляки</p>
								<a href="<?php echo get_category_link(51);?>">Куртки и тепляки</a>
							</figcaption>
																	
						</figure>
					</div>

					<div class="catalog-item grid item23">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/hilet.jpg" width="100%" />
							<figcaption>
								<h2><span>Жилетки</span></h2>
								<p>Жилетки</p>
								<a href="<?php echo get_category_link(49);?>">Жилетки</a>
							</figcaption>										
						</figure>
					</div>

					<div class="catalog-item grid item24">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/razm.jpeg" width="100%" />
							<figcaption>
								<h2 id="fix-h2-fz">Разминочные<br><span>Костюмы</span></h2>
								<p>Разминочные костюмы</p>
								<a href="<?php echo get_category_link(40) ; ?>">Разминочные костюмы</a>
							</figcaption>	
						</figure>
					</div>

					<div class="catalog-item grid item25">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/fitness.jpeg" width="100%" />
							<figcaption>
								<h2><span>Фитнес</span></h2>
								<p>Товары для фитнеса</p>
								<a href="<?php echo get_category_link(44);?>">Товары для фитнеса</a>
							</figcaption>	
						</figure>
					</div>

					<div class="catalog-item grid item26">
						<figure class="effect-oscar">
							<img src="<?php echo get_bloginfo('template_url')?>/assets/image/sourse-items/drugoe.jpg" width="100%" />
							<figcaption>
								<h2>Другое<span></span></h2>
								<p>Другие товары</p>
								<a href="<?php echo get_category_link(15);?>"></a>
							</figcaption>	
						</figure>
					</div>

					
				</section>		
			</div>
		</div> <!-- ========== catalog end============= -->
	<!-- ========= widget block ============= -->
	<div class="Widget-container container">
	<div class="row">
		<!-- VK Widget -->
			<div class="col xl6 s12 center vkwidget">
				<div class='center gorka-vk-widget' id="vk_widget"></div>
				<script type="text/javascript">
					VK.Widgets.Group("vk_widget", {width: 'auto', mode: 3, no_cover: 1}, 48288021);
				</script>
			</div>
		<!-- Insta Widget -->
			<div class="col xl6 s12 center instawidget">
			<?php echo do_shortcode("[instagram-feed]"); ?>
				<a href="https://instawidget.net/v/user/gorca21.ru" id="link-61ecbce8dce4f675d5b69437bb843789c7b65541c734729723356e5007c16a76">@gorca21.ru</a>
				<script src="https://instawidget.net/js/instawidget.js?u=61ecbce8dce4f675d5b69437bb843789c7b65541c734729723356e5007c16a76&width=600px"></script> 
			</div>
		</div>
	</div>

	</main><!-- #main -->

<!-- 		<?php /*
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				*/?>
				<header>
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</header>
				<?php 
			//endif;
			/* Start the Loop */
			//while ( have_posts() ) :
				//the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );
			//endwhile;
			//the_posts_navigation();
		//else :
			//get_template_part( 'template-parts/content', 'none' );
		//endif;
		?> -->

<?php
// get_sidebar();
get_footer();
