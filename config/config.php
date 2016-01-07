<?
/*
 * CONFIG - base tag & minification
 */  
// DEVELOPMENT SERVER
$cowoserverfolder = 'carl_github/cowo-Boilerplate'; 
if($_SERVER['SERVER_NAME']=='cowoserver' || $_SERVER['SERVER_NAME']=='172.16.0.100')
{
	$domain = '172.16.0.100'; // for html // 'cowoserver' doesn't work with devices
	// $path = 'http://'.$domain.'/carljohansson/'; // for php // NOT USED YET ! - for INCLUDES INSIDE INCLUDES THINGEE
	?>         
  <base href="http://<?=$domain ?>/<?=$cowoserverfolder ?>/">
  <? /* <base href="http://<?php echo "$path"; ?>"> */ ?>    
  <?
  $min='FALSE';
}
// PRODUCTION SERVER
elseif($_SERVER['SERVER_NAME']=='carljohansson.net' || $_SERVER['SERVER_NAME']=='www.carljohansson.net')
{	
	$domain = 'www.carljohansson.net/tools/cowo-Boilerplate/';
	// $path = 'www.carljohansson.net';
	?>       
	<base href="http://<?=$domain ?>/">    
	<?
	// $min='TRUE';
	$min='FALSE'; // vs TRUE (ALL MINIFIED AND CONCATENATED) (falta mejorar el grunt process, pero ya casi estoy ahi)
}
// STAGING SERVER
else
{	
	$domain = '212.34.152.30/~tscjnet';
	// $path = 'www.carljohansson.net';
	?> 
	<base href="http://<?=$domain ?>/">     
	<?
	$min='FALSE'; // vs TRUE, to test grunt online
}
?>


<? 
/*
 * CONFIG - LANG (HTML TAG)
 */
// $lang = 'en';  //  no aplicable si llamada esta despues del html tag !!!

/*
 * CONFIG - COPY ETC
 *
 */
$website_name = "cowo-Boilerplate";
$website_slogan = "a simple Front-End Boilerplate by <a href='https://twitter.com/carlwebdev' target='_blank'>@carlwebdev</a>";

/*
 * CONFIG - COPY - PAGES
 *
 */
$pagename_index = "Home";
$pagename_about = "About Us";
$pagename_contact = "Contact";
$pagename_cookies = "Cookies";
$pagename_404 = "404";
// & faqs... whatever not, too much shit 

/*
 * CONFIG - ICON FONTS
 */
$icon_navicon='<span data-icon="e" class="icon"></span>';
$icon_search='<span data-icon="f" class="icon"></span>';
$icon_left='<span data-icon="c" class="icon"></span>';
$icon_right='<span data-icon="d" class="icon"></span>';
$icon_up='<span data-icon="b" class="icon"></span>';
$icon_down='<span data-icon="a" class="icon"></span>'; 
?>