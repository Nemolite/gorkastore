<?php 
if (! defined( 'ABSPATH' ) ) {
	exit;// Exit if accessed directly
}
?>

				<div id="showSearch" class="modal">
					<div class="modal-content">
						<form class="searchForm" method="post" action='<?php esc_url( home_url('') );?>'>
							<input type="search" id="Seachstr" value="<?php get_search_query(); ?>" name="s" placeholder="Поиск">
							<button class="btnsearch"><i class="material-icons small">search</i></button>
						</form>
					</div>
				</div>