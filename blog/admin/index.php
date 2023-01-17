<?php
session_start();

// Archivo index del admin

require 'config.php';
require '../funciones/functions.php';

$conexion = conexionbd($bd_config);
if(!$conexion) {
    header('Location: ../error.php');
};

//Comprobar sesion

comprobarSession();

//Traemos todos los post del blog
$posts = obtener_post($blog_config['post_por_pagina_admin'],$conexion);



require '../views/admin.view.php';

?>