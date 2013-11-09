$(document).ready(function() {


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
	
	
	
	var menu_button = undefined;
	/*		MOBILE		*/
	if (menu_button==undefined/*jQuery(window).width()<=800*/){
		menu_button = jQuery('<a href="#" id="menu_button">Menú</a>');
		//~ menu_button.hide();
		jQuery('#menu-cintilla').prepend(menu_button);
		menu_button.click(function (){
			jQuery('#menu').slideToggle();
			return false;
		});
	}	
});
