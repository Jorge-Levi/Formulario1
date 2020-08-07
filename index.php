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
}

require('index.view.php');