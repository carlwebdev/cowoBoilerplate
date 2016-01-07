<?
/*
 * CONFIG - condb (just this, as it's also for the cms !!!)
 */ 
if($_SERVER['SERVER_NAME']=='cowoserver' || $_SERVER['SERVER_NAME']=='172.16.0.100')
{	
	// CONDB - DEVELOPMENT SERVER
	$servidor="localhost";
	$user="root";
	$pass="Cowoserver2013";
	$bd="not_ddbb";
}
elseif($_SERVER['SERVER_NAME']=='carljohansson.net' || $_SERVER['SERVER_NAME']=='www.carljohansson.net')
{	
	// CONDB - PRODUCTION SERVER
	$servidor="localhost";
	$user="ddbb_user";
	$pass="ddbb_password";
	$bd="ddbb_ddbb";
}
else 
{	
	// CONDB - STAGING SERVER
	$servidor="localhost";
	$user="ddbb_user";
	$pass="ddbb_password";
	$bd="ddbb_ddbb";				
}
$connexio=new MySQLi($servidor,$user,$pass,$bd);
if ($connexio->connect_errno) 
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>