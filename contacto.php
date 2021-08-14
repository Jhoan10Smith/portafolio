<?php
    extract($_POST);
    $destino = "jhoan10smith@gmail.com";
    $contenido = "Nombre: ".$nombre."\nCorreo: ".$email."\nMensaje: ".$mensaje;
    mail($destino,"Contacto Portafolio", $contenido);
    header("Location: index.html");
?>