$(document).ready(function() {
	
	$(window).scroll(function (){
		if ($(window).scrollTop()>200){
			$('#nav-container').addClass('fixed');
		}else{
			$('#nav-container').removeClass('fixed');
		} 	
	});

	$("#comment").autoGrow();
	$("#comment").keydown(function() {
		var contenidoActual = $("#comment").val();
		if ( contenidoActual.length > 1000 ) {
			$('#comment-notice').css('opacity','1');
			$('#comment-notice').css('height','auto');
			} else {
			$('#comment-notice').css('opacity','0');
			$('#comment-notice').css('height','0');
			}
			
	});
	
});
