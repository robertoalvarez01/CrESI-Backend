<?php 
	header('Access-Control-Allow-Origin: *');
	require 'conexion.php';

	$id = $_POST["id"];

	$sel = "SELECT pregunta, correcta, masinfo FROM preguntas WHERE id='$id'";
	$ejecutar = $mysqli->query($sel);
	$res = $ejecutar->fetch_assoc();
	$salida = $res['pregunta']."|".$res['correcta']."|".$res['masinfo'];
	echo $salida;
	//$_POST["categoria"]
	//'$categoria'

	//$cantidad = $ejecutar -> num_rows ;

//	if ($chequear_email == 1) {
//		echo json_encode(false, JSON_FORCE_OBJECT);
//		exit();
//	}else{
//		$insertar = "INSERT INTO users(name, email, password) VALUES('$nombre', '$email', '$password')";
//		$ejecutar = $mysqli->query($insertar);

//		if ($ejecutar) {
//			echo json_encode(true, JSON_FORCE_OBJECT);
//		}
//	}
?>