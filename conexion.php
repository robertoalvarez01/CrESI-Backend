<?php  
	$host = "192.168.0.63";
	$user = "roberto_admin";
	$pw = "Roberto43505386";
	$db = "cresiapp";
	#$user = "root";
	#$pw = "Roberto01";
	#$db = "interbandos";
	$mysqli = new mysqli ($host, $user, $pw, $db);
	if ($mysqli -> connect_error) {
		die ("Error en la conexion". $mysqli -> connect_error);
	}
?>