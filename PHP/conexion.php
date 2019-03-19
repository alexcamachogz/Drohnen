<?php 

    $host 		= "localhost";
	$user 		= "root";
	$pass 		= "";
	$base_datos = "bdlogin";

	$link = new PDO("mysql:host=$host; dbname=$base_datos; charset=utf8", $user, $pass);

	// PRUEBAS DE CONEXIÓN AL SERVIDOR
	// if(!$link) {
    //     echo "Conexión denegada: " . mysql_error();
    // } else{
    //     echo "Conexión establecida" ;
	// }
?>