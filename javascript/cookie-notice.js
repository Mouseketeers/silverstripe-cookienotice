(function($) {
	$(document).ready(function(){
		var cookieNotice = $('#cookie-notice'),
			acceptButton = $('#cookie-notice-accept'),
			deleteButton = $('#cookie-accept-delete');
		
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
		deleteButton.click(function(e){
			e.preventDefault();
			document.cookie = 'cookiesAccepted=deleted;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
			alert('Your accept of cookies on this computer has been cancled.');
		});
	});
})(jQuery);