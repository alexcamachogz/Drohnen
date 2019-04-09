<?php 

    include_once("../conexion.php");
    session_start();
    
    header('Content-Type: application/json');

    $email 		= trim(isset($_POST['email']) 	    ? $_POST['email'] 	    : "");
	$passwd 	= trim(isset($_POST['contrasena']) 	? $_POST['contrasena'] 	: "");
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (strlen($passwd) >= 8) {
            #$sql = "SELECT * FROM usuario WHERE email like '$email' AND passwd = '$passwd'";
            
            $statement = $link->prepare('SELECT * FROM usuario WHERE email = :email AND passwd = :passwd');
            $passwd = md5($passwd);

	        $statement->execute(array(
			    ':email' => $email,
			    ':passwd' => $passwd
            ));
            
            $resultado = $statement->fetch();

            if ($resultado !== false) {
                echo json_encode([
                    "status" => "OK",
                    "message" => "OK"
                ]);
            } else {
                echo json_encode([
                    "status" => "INVALID_ID",
                    "message" => "Las credenciales son invalidas"
                ]);
            }
            
            #$link->query($sql);
        } else {
            echo json_encode([
                "status" => "INVALID_PASSWORD",
                "message" => "La contraseña debe ser mayor a 8 caracteres."
            ]);
        }
    } else {
        echo json_encode([
            "status" => "INVALID_EMAIL",
            "message" => "El formato del correo es inválido."
        ]);
    }

?>