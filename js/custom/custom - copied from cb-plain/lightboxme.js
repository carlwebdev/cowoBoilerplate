// SCRIPT - lightbox me

$(document).ready(function(){
	$('.lightboxme_trigger').click(function(e) {		
		$('.lightboxme_content').lightbox_me({
		// overlayCSS:{background: '#61ab30', opacity: .6},		
		});  
	});
});	
