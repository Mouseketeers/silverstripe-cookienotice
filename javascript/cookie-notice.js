$(document).ready(function(){

	var cookieNotice = $('#cookie-notice'),
		acceptButton = $('#cookie-notice-accept');
	
	acceptButton.click(function(e){
		e.preventDefault();	
		$.ajax({
			url: acceptButton.attr('href'),
			success: function(data, textStatus) {
				if(data === 'success') {
					cookieNotice.slideUp(500);
				}
			}
		});
	});
});