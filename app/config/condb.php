<?
/*
 * CONFIG - CONDB (3 servers)
 */ 
if($_SERVER['SERVER_NAME']=='cowoserver' || $_SERVER['SERVER_NAME']=='172.16.0.100')
{	
	// CONDB - OFFLINE - DEVELOPMENT SERVER
	$servidor="localhost";
	$user="root";
	$pass="Cowoserver2013";
	$bd="johansson_ddbb";
}
elseif($_SERVER['SERVER_NAME']=='carljohansson.net' || $_SERVER['SERVER_NAME']=='www.carljohansson.net')
{	
	// CONDB - ONLINE - PRODUCTION 
	$servidor="localhost";
	$user="johansson_user";
	$pass="johansson_password";
	$bd="johansson_ddbb";
}
else 
{	
	// CONDB - ONLINE - STAGING SERVER
	$servidor="localhost";
	$user="tscjnet_user";
	$pass="tscjnet_pass";
	$bd="tscjnet_ddbb";				
}
$connexio=new MySQLi($servidor,$user,$pass,$bd);
if ($connexio->connect_errno) 
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>