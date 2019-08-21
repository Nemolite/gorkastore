<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorka
 */

?>	
<!-- modal-map -->
	<div id="showMap" class="modal">
    	<div class="modal-content">
      		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A57bec4b0035a4ba105f72567ce7aacc603d98c1c2a231f03a6dc08438af4ef2b&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
      		<p>Адрес: 428015, Чувашская Республика, г.Чебоксары ул. Академика Королева 3, пом. 8</p>    
      	</div>
    	<div class="modal-footer">
      		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
    	</div>
  	</div>
	</div><!-- #primary -->
	
	
	<div class="fix-space-footer">
	 <!-- пустой блок-->
	</div>
	
	
	<footer class="row main-footer">
		<div class="upfooter">		
		<div class="col xl3 l6 m6  logo-footer center">
			<img src="<?php echo get_bloginfo('template_url')?>/assets/image/gorkalogo.png" alt="">
		</div>
		<div class="col xl9 l6 m6 ">
		    <p class="upfooter-text-content-fix">Магазин "Горка" - Лыжная и беговая экипировка</p> 
			<p  class="upfooter-text-content"> г. Чебоксары, Московский проспект 50</p>
			<p  class="upfooter-text-content"> г. Ульяновск, проспект Нариманова 45</p>
			

			
		</div>
		</div>	
	<div class="center" id="footer">
		
	<div class="columns">
		<div class="col xl3 l6 m6 s12">
			<ul>
				<li>Покупателю</li>
				<li><a href="<?php echo get_bloginfo('template_url');?>/sposoby-oplaty/">Способы оплаты</a></li>
				<li><a href="<?php echo get_bloginfo('template_url');?>/informaciya-o-dostavke/">Условия доставки</a></li>
				<li><a href="<?php echo get_bloginfo('template_url');?>/kak-dobratsya/">Связаться с нами</a></li>
				<!-- <li><a href="#showMap" class="modal-trigger">Мы на карте</a></li> -->
			</ul>
		</div>
		<div class="col xl3 l6 m6 s12">
			<ul>
				<li><a class="fix-color-a-footer" href="<?php echo get_bloginfo('template_url');?>/shop/">Магазин</a></li> 
				<li><a href="<?php echo get_tag_link(60);?>">Все для Бега</a></li>
				<li><a href="<?php echo get_tag_link(61);?>">Лыжный спорт</a></li>
				<li><a href="<?php echo get_tag_link(62);?>">Велоаксессураы</a></li>
				<li><a href="<?php echo get_tag_link(72);?>">Фитнес</a></li>
				
			</ul>
		</div>
		<div class="col xl3 l6 m6 s12">
			<ul>
				<li>Личный Кабинет</li>
				<li><a href="<?php echo get_bloginfo('template_url')?>/my-account/">Вход</a></li>
				<li><a href="">Регистрация</a></li>
				<li><a href="<?php echo get_bloginfo('template_url')?>/my-account/lost-password/">Забыли пароль?</a></li>
			</ul>
		</div>
		<div class="col xl3 l6 m6 s12">
			<ul>
				<li>Юридическая информация</li>
				
				<li><a href="<?php echo get_bloginfo('template_url')?>/politika-konfidencialnosti/">Политика конфиденциальности</a></li>
				<li><a href="<?php echo get_bloginfo('template_url')?>/polzovatelskoe-soglashenie/">Пользовательское соглашение</a></li>
			</ul>
		</div>
	</div>
		<div>
			<div class="col"></div>
			<div class="col"></div>
		</div>
		<div class="copyright-wrapper valign-wrapper">
		<div class="container copyright-info">
			<?php $copyright = carbon_get_theme_option('gorka_footer_copyright'); ?>
			<p><?php echo $copyright; ?></p>
		</div>
	</div>
	</div>
	</footer>
<?php wp_footer(); ?>

</body>
</html>
