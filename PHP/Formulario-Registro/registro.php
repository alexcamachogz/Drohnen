<?php

    include_once("../conexion.php");


    $nombre 	= trim(isset($_POST['nombre-registro']) 	? $_POST['nombre-registro'] 	: "");
	$apellido 	= trim(isset($_POST['apellido-registro'])   ? $_POST['apellido-registro']   : "");
	$email 		= trim(isset($_POST['email-registro']) 	    ? $_POST['email-registro'] 	    : "");
	$passwd 	= trim(isset($_POST['contrasena-registro']) ? $_POST['contrasena-registro'] : "");
	$aCode 		= trim(isset($_POST['codigo-registro']) 	? $_POST['codigo-registro'] 	: "");

	$passMd5 = md5($passwd);

	$sql = "INSERT INTO usuario (firstName, lastName, email, passwd, accessCode) VALUES ('$nombre', '$apellido', '$email', '$passMd5', '$aCode')";
	echo $sql;

	$link->query($sql);

?>