// JavaScript Document
// SCRIPT - Cookies Popup

/*
 * COOKIES "popup/modal" - mover a website scripts, RENAME AS ...
 */
 
/* 1º aparece el modal de cookies, con delay, desde abajo */
$(document).ready(function(){		
	$('.popup_cookies').delay(1000).animate({     // RENAME TO cowo_cookies or popup_cookies .. yes, mejor popup_cookies ......
			bottom: '+=200' // los 200 que he escondido, por ejemplo
	},2000, 'swing'); 
});		
			
/* 2º se cierra el modal de cookies, con delay corto, hacia abajo */ 
$(document).ready(function(){
  $(".popup_cookies li:first-of-type a").click(function(){		
		// $(".leydecookies").hide(0);
		$('.cowo-cookies').delay(300).animate({
				bottom: '-=200' // los 200 que he escondido, por ejemplo
		},1000, 'swing'); 	
  });
});