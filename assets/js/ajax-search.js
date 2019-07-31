jQuery(function ($) {
	$('.searchForm input[name="s"]').on('keyup', function(){
		var search = $('.searchForm input[name="s"]').val();
		
		if (search.lenght < 4){
			return false;
		}
		var data = {
			s: search,
			action: 'search-ajax',
			nonce: searchForm.nonce
		};
		$.ajax({
			url: searchForm.url,
			data: data,
			type: 'POST',
			dataType: 'json',
			beforeSend: function (xhr) {
			},
			success:function(data) {
				console.log(data);
			}
		});
		
	});
});