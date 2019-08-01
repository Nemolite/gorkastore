<?php 
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
}
?>

<!-- main menu -->
				<div class="navi-wrap hide-on-med-and-down">
					<div class="sub-navi-wrap">
						<nav class="valign-wrapper main-nav">
                          <!-- Функция описана в файле navigations.php, папка includes -->							
							<?php gorka_primary_menu(); ?>
						</nav>				
					</div>
				</div>
<!-- mobile menu -->
				<nav>

					<ul id="nav-mobile" class="sidenav">
						<li><a href="#showSearch" class="modal-trigger"><p>Поиск</p></a></li>
						<li class="divider" tabindex="-1"></li>
						<?php gorka_mobile_menu(); ?>
						<li class="divider" tabindex="-1"></li>	
						
						<li><a href="#showMap" class="modal-trigger">Показать карту</a></li>
					</ul>						
				</nav>