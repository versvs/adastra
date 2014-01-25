$(document).ready(function() {

    jQuery('#menu-icon').live('click', function(event) {
    		if (jQuery('#menu-icon.activo').length > 0 ) {
    				jQuery('#menu-icon').removeClass('activo');
    			} else {
    				jQuery('#menu-icon').addClass('activo');
    			}
         jQuery('#nav-container nav .movil-nav ul').toggle('show');
    });
	
	$(window).scroll(function (){
		if ($(window).scrollTop()>40){
			$('#nav-container').addClass('topped');
		}else{
			$('#nav-container').removeClass('topped');
		} 	
	});
	
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
