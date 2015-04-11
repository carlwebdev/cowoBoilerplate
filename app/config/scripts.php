<?php
/*
 * CONFIG - SCRIPTS (Development (not minified) VS Production (minified))
 */ 
?>
<!-- USAR IFS DE PHP CPN SERVER SIDE STUFF PARA ACTIVAR DESACTIVAR SCRIPTS SEGUN SEA NECESARIO !!! -->
<!-- detallar geeranlidad de lso scripts, y ponerlos segun init.js con seccioenes de windoww load, docuemte ready, para ajax etc -->
<!-- TEST VALIDATE HTML 5 DOCTYPE, AND ADD MODERNIZR, and htmlshiv, etc etcetc ETC, test test test -->


<? /* 
JAVASCRIPT AT THE BOTTOM - for fast page loading 
JavaScript at the bottom for fast page loading
Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary
*/ ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<? /*
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
*/ ?>

<? if($min=='FALSE') 
{ 
?>


<script src="assets/js/website_scripts.js"></script>



<!-- Mmenu - Side menu -->
<script type="text/javascript" src="assets/js/plugins/mmenu/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu(); // select what should be the side menu
	});
</script> 



<!-- <script type="text/javascript" src="../js/custom/cowo_tabs.js"></script> -->
<script src="assets/js/custom/cowo_dropdown.js"></script>





<? 
} 
elseif ($min='TRUE') 
{ 
?>
<? /* 
<script src="js/build/global.min.js"></script>  
*/ ?>  
<?
}
?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->




<!--[if lt IE 9]>
<script src="js/lib/html5shiv.min.js"></script>
<![endif]-->




<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--(NOT NECESSARY, as this pack has MODERNIZr)-->





<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<!-- <script type="text/javascript" src="js/css3-mediaqueries.js"></script> --> 


<!-- CSS3 MEDIA QUERIES (FOR INTERNET EXPLORER till 8 , etc ) And you should combine and compress with other scripts and include it just before </body> for better page speed - but you already knew that -->
<!-- <script src="../js/lib/css3-mediaqueries.js"></script>    -->


