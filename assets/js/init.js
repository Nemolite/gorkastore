jQuery(function($){
  $(function(){
  	 $('.slider').slider({
  	 	interval:3500,
  	 	height: 642
  	 });
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
    $('.fixed-action-btn').floatingActionButton({
      direction: 'right'
    });
  }); // end of document ready
}); // end of jQuery name space

jQuery(function($) {
		$( '#mi-slider' ).catslider();
});
