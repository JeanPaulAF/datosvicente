<?php
    header("Access-Control-Allow-Origin: *");
    //Esto indica que a este servicio se puede acceder desde cualquier dominio

    $cn = new mysqli("localhost","root","","datosvicente");
    //Servidor de base de datos, usuario, contraseña, base de datos 
    //$cn representa a la conexión a la base de datos
?>