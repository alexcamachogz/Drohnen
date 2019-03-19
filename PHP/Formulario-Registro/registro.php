<?php

	include_once("../conexion.php");
	header('Content-Type: application/json');

	$nombre 	= trim(isset($_POST['nombre']) 		? $_POST['nombre'] 		: "");
	$apellido 	= trim(isset($_POST['apellido'])   	? $_POST['apellido']   	: "");
	$email 		= trim(isset($_POST['email']) 	    ? $_POST['email'] 	    : "");
	$passwd 	= trim(isset($_POST['contrasena']) 	? $_POST['contrasena'] 	: "");
	$aCode 		= trim(isset($_POST['codigo']) 		? $_POST['codigo'] 		: "");

	if (strlen($nombre) > 3) {
		if (strlen($apellido) > 3) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if (strlen($passwd) >= 8) {
					if ($aCode == "qwerty123") {
						// $passwd = md5($passwd);
						$sql = "INSERT INTO usuario (firstName, lastName, email, passwd, accessCode) 
								VALUES ('$nombre', '$apellido', '$email', '$passwd', '$aCode')";
						$link->query($sql);
						echo json_encode([
							"status" => "OK",
							"message" => "Su registro ha sido completado."
						]);
					} else {
						echo json_encode([
							"status" => "INVALID_CODE",
							"message" => "El codigo de acceso no es valido."
						]);
					}
				} else {
					echo json_encode([
						"status" => "INVALID_PASSWORD",
						"message" => "La contraseña debe ser mayor a 8 caracteres."
					]);
				}
			} else {
				echo json_encode([
					"status" => "INVALID_EMAIL",
					"message" => "Formato del correo es inválido."
				]);
			}
		} else {
			echo json_encode([
				"status" => "INVALID_LASTNAME",
				"message" => "El apellido es inválido."
			]);
		}
	} else {
		echo json_encode([
			"status" => "INVALID_NAME",
			"message" => "El nombre es inválido."
		]);
	}

	# No funciona, arreglar
	// if (strlen($nombre) > 3) {
	// 	if (sterlen($apellido) > 3) {
	// 		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 			if ($passwd >= 8) {
	// 				# aquí debería ir la query
	// 			} else {
	// 				echo json_encode([
	// 					"status" => "INVALID_PASSWORD",
	// 					"message" => "La contraseña debe ser mayor a 8 caracteres."
	// 				]);
	// 			}
	// 		} else {
	// 			echo json_encode([
	// 				"status" => "INVALID_EMAIL",
	// 				"message" => "Formato del correo es inválido."
	// 			]);
	// 		}
	// 	} else {
	// 		echo json_encode([
	// 			"status" => "INVALID_LASTNAME",
	// 			"message" => "Formato del apellido es inválido."
	// 		]);
	// 	}
	// } else {
	// 	echo json_encode([
	// 		"status" => "INVALID_NAME",
	// 		"message" => "Formato del nombre es inválido."
	// 	]);
	// }

?>