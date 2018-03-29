<?php 
	header('Access-Control-Allow-Origin: *');
	require 'conexion.php';

	$id = $_POST["id"];

	$sel = "SELECT id, pregunta, respuesta1, respuesta2, respuesta3, correcta FROM preguntas WHERE id='$id'";
	$ejecutar = $mysqli->query($sel);
	$res = $ejecutar->fetch_assoc();
	$salida = $res['pregunta']."|".$res['respuesta1']."|".$res['respuesta2']."|".$res['respuesta3']."|".$res['correcta'];
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
