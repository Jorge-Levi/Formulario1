<?php
$errores = '';
$enviado = '';
if(isset($_POST['submit'])){
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $nombre = trim($nombre);
        $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
        $nombre = htmlspecialchars($nombre);
    }else{
        $errores .= 'Por favor, ingresa un nombre<br>';
    }

    if(isset($_POST['correo']) && !empty($_POST['correo'])){
        $correo = $_POST['correo'];
        $correo = trim($correo);
        $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
        if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
            $correo = htmlspecialchars($correo);
        }else{
            $errores .= 'Por favor, ingresa un correo valido<br>';
        }
    }else{
        $errores .= 'Por favor, ingresa un correo<br>';
    }

    if(isset($_POST['mensaje']) && !empty($_POST['mensaje'])){
        $mensaje = $_POST['mensaje'];
        $mensaje = trim($mensaje);
        $mensaje = filter_var($mensaje,FILTER_SANITIZE_STRING);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);
    }else{
        $errores .= 'Por favor, ingresa un mensaje<br>';
    }

    if(!$errores){
        $destinatario = 'tapialugardo29@gmail.com';
        $asunto = 'Correo Enviado desde formulario';
        $mensajePreparado = "De: $nombre \n";
        $mensajePreparado = "Correo: $correo \n";
        $mensajePreparado = "Mensaje: $mensaje";
        // mail($destinatario,$asunto,$mensajePreparado);
        $enviado = true;
    }
}

require('index.view.php');