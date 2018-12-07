$(document).ready(function(){ 

 $(document).on('click', '#ragisterForm', function (event){
	event.preventDefault();

	var form_data = $('form').serialize();
	var data = {
		'action' : 'add_user',
		'form_data' : form_data
	};

	$.ajax({
		url: my_ajax_object.ajax_url,
		type: 'post',
		data: data,
		 success: function (response) {
			alert(response);
		}
	});

});
	
	
	
}); 