<?php

#Forma más sencilla de hacer llamadas a la base de datos

$conexion = new mysqli('127.0.0.1:3307','root','','prueba_datosci');

if ($conexion->connect_errno){
    die('Lo siento hubo un error con el servidor');
} else {
 echo 'Estoy conectado vivito y coleando.';
}

?>