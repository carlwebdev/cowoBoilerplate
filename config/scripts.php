<?php
/*
 * CONFIG - SCRIPTS (Development (not minified) VS Production (minified))
 */ 
?>
<!-- USAR IFS DE PHP CON SERVER SIDE STUFF PARA ACTIVAR DESACTIVAR SCRIPTS SEGUN SEA NECESARIO !!! -->
<!-- detallar geeranlidad de lso scripts, y ponerlos segun init.js con seccioenes de windoww load, docuemte ready, para ajax etc -->
<!-- TEST VALIDATE HTML 5 DOCTYPE, AND ADD MODERNIZR, and htmlshiv, etc etcetc ETC, test test test -->
<? /* 
JavaScript at the bottom for fast page loading
Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary
*/ ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script> -->

<? 
/* 
 * UI - base
 */ 
?> 
<script src="js/website_scripts.js"></script>

<? 
/* 
 * HeadRoom.js 
 */ 
?>
<script src="js/plugins/headroom/headroom.js"></script>      
<script src="js/plugins/headroom/jQuery.headroom.js"></script>
<script>
    $(".headroom").headroom();
</script> 

<? 
/* 
 * Elevator.js !!!!!!!!!! 
 */ 
?>

<? 
/* 
 * UI - scrollToTop // jg_scrollToTop
 */ 
?> 
<script>
$(".jq_trigger_scroll").click(function() {
    $('html, body').animate({
        // scrollTop: $("#demo_wrapper").offset().top
				scrollTop: 0
    }, 800);
});
</script>
<? 
/* 
 * UI - SCROLL TO A SPECIFIC DIV (NON-TOP CASE) // jg_scrollToContent , jg_scrollToDiv
 */ 
?>
<script>
/*
$(".jq_trigger_scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#demo_wrapper").offset().top
    }, 800);
});
*/
</script>


<? 
/* 
 * UI - Mmenu - Side menu
 */ 
?>
<script src="js/plugins/mmenu/jquery.mmenu.min.all.js"></script>
<script>
	$(function() {
		$('nav#menu').mmenu(); // select what should be the side menu
	});
</script> 	
	
       
       
       
<script>	
	/*
 * COOKIES "popup/modal" - mover a website scripts, RENAME AS ...
 */
/* 1º aparece el modal de cookies, con delay, desde abajo */
$(document).ready(function(){		
	$('.modal_leydecookies').delay(1000).animate({
			bottom: '+=200' // los 200 que he escondido, por ejemplo
	},2000, 'swing'); 
});					
/* 2º se cierra el modal de cookies, con delay corto, hacia abajo */ 
$(document).ready(function(){
  $(".modal_leydecookies li:first-of-type a").click(function(){		
		// $(".leydecookies").hide(0);
		$('.modal_leydecookies').delay(300).animate({
				bottom: '-=200' // los 200 que he escondido, por ejemplo
		},1000, 'swing'); 	
  });
});
</script> 
