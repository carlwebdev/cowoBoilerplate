<?
/*
 * CONFIG - BASE TAG etc !!!!!!! & condb 
 */ 
$cowoserverfolder = 'carl_github/cowo-Boilerplate'; 

if($_SERVER['SERVER_NAME']=='cowoserver' || $_SERVER['SERVER_NAME']=='172.16.0.100')
{
// OFFLINE - DEVELOPMENT SERVER
$domain = '172.16.0.100'; // for html // 'cowoserver' doesn't work with devices
// $path = 'http://'.$domain.'/carljohansson/'; // for php // NOT USED YET ! - for INCLUDES INSIDE INCLUDES THINGEE
?>         
<base href="http://<?=$domain ?>/<?=$cowoserverfolder ?>/">
<? /* <base href="http://<?php echo "$path"; ?>"> */ ?>    
<?
$stage='DEVELOPMENT';
// $status='OFFLINE';
$min='FALSE';
// $min='TRUE'; // only to test grunt locally

	
}
elseif($_SERVER['SERVER_NAME']=='carljohansson.net' || $_SERVER['SERVER_NAME']=='www.carljohansson.net')
{	
// ONLINE - PRODUCTION SERVER
$domain = 'www.carljohansson.net';
// $path = 'www.carljohansson.net';
?>       
<base href="http://<?=$domain ?>/">    
<?
$stage='PRODUCTION'; // ALL MINIFIED AND CONCATENATED 
// $status='ONLINE';
// $min='TRUE';
$min='FALSE'; // falta mejorar el grunt process, pero ya casi estoy ahi 
	
			
}
else
{	
// ONLINE - STAGING SERVER
$domain = '212.34.152.30/~tscjnet';
// $path = 'www.carljohansson.net';
?> 
<base href="http://<?=$domain ?>/">     
<?
$stage='DEVELOPMENT';
// $status='ONLINE';
// $min='TRUE';
$min='FALSE'; // falta mejorar el grunt process, pero ya casi estoy ahi 

			
}
?>



<?
/*
 * CONFIG - LANG (HTML TAG)
 */
// $lang = 'en';  //  no aplicable si llamada esta despues del html tag !!!
?>



<?
/*
 * CONFIG - COPY - sistema multilingue
 */ 
 
// $includepath='../../config/config/lang'.$lang.'/general.php';

/*
if(is_file('../../config/config/lang'.$lang.'/general.php')) 
// tb funciona con file_exists, pero es mas seguro con is_file (ya que file exists se puede quedar en nombre de carpeta y no necesariamente en nombre de archivo
// include $includepath;  
{
	include ('../../config/config/lang'.$lang.'/general.php');
}
else
{
	include ('../../config/lang'.$lang.'/general.php');
	
}
*/
?>

<? 
// include ('app/config/lang/en/general.php'); 
?>

<? 
include ('app/config/copy/general.php');
include ('app/config/copy/pagenames.php'); 
 
include ('app/config/copy/seo.php'); 

?>





