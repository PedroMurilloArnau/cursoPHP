<?php

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }else {
        $errores .= 'Falta incluir el nombre <br/>';
    }

    if (!empty($email)){
        $nombre = trim($email);
        $nombre = filter_var($email, FILTER_SANITIZE_EMAIL);
        filter_var($email, FILTER_VALIDATE_EMAIL); 
    }else {
        $errores .= 'Falta incluir el email <br/>';
    }
    if(!empty($message)){
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripslashes($message);
    } else {
        $errores .= 'Por favor ingresa el mensaje <br/>';
    }
    if(!$errores){
        $enviar_a = 'pedro.marnau@gmail.com';
        $asunto = 'Correo enviado desde mi prueba';
        $message_prepared = "De: $nombre \n";
        $message_prepared .= "Correo: $email \n";
        $message_prepared .= "Mensaje: " . $message;

        //mail($enviar_a,$asunto,$message_prepared);
        $enviado = 'true';
    }
}

require 'index.view.php';


?>