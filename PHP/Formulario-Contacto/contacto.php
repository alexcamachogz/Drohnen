<?php

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

header('Content-Type: application/json');

if(@isset($_POST["postFlag"])){
    $nombre         = trim(isset($_POST["nombre"]) ? $_POST["nombre"] : "");
    $email          = trim(isset($_POST["email"]) ? $_POST["email"] : "");
    $comentario     = trim(isset($_POST["mensaje"]) ? $_POST["mensaje"] : "");

    if(strlen($nombre) > 3){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(strlen($comentario) > 10){
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->IsSMTP(); // enable SMTP
                $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only, 0 = nothing
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = "ssl";
                $mail->Host = "relesur.besoft.com.mx";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "webpage@relesur.besoft.com.mx";
                $mail->Password = '($PYd&s;snc9';
                $mail->SetFrom("webpage@relesur.besoft.com.mx","CONTACTO WEB RELESUR");
                $mail->Subject = "COMENTARIO PAGINA WEB";
                $mail->AddAddress("camacho.ale94@gmail.com");

                $cuerpoMensaje = "$nombre<br>$email<br>$comentario";
                $mail->Body = utf8_decode($cuerpoMensaje);

                if($mail->Send()) {
                    echo json_encode([
                        "status" => "SUCCESS",
                        "message" => "Su mensaje ha sido enviado exitosamente."
                    ]);
                } else {
                    echo json_encode([
                        "status" => "ERROR_SENDING_MAIL",
                        "message" => "Error del servidor de correos"
                    ]);
                }

                exit();
            } else {
                echo json_encode([
                    "status" => "INVALID_COMENTARY",
                    "message" => "El mensaje debe tener por lo menos 10 caracteres."
                ]);
            }
        } else {
            echo json_encode([
                "status" => "INVALID_EMAIL",
                "message" => "Formato de correo inválido."
            ]);
        }
    } else {
        echo json_encode([
            "status" => "INVALID_NAME",
            "message" => "Formato de nombre inválido."
        ]);
    }
} else {
    echo json_encode([
        "status" => "INVALID_METHOD",
        "message" => "El método no está permitido."
    ]);
}

?>