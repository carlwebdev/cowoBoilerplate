<?php
/*
 * CONFIG - SCRIPTS (Development (not minified) VS Production (minified))
 */ 
?>
<!-- USAR IFS DE PHP CPN SERVER SIDE STUFF PARA ACTIVAR DESACTIVAR SCRIPTS SEGUN SEA NECESARIO !!! -->
<!-- detallar geeranlidad de lso scripts, y ponerlos segun init.js con seccioenes de windoww load, docuemte ready, para ajax etc -->
<!-- TEST VALIDATE HTML 5 DOCTYPE, AND ADD MODERNIZR, and htmlshiv, etc etcetc ETC, test test test -->

<? /* JAVASCRIPT AT THE BOTTOM - for fast page loading */ ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<? if($min=='FALSE') 
{ 
?>


<script src="assets/js/website_scripts.js"></script>

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