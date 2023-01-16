<?php
require 'admin/config.php';
require 'funciones/functions.php';

$conexion = conexionbd($bd_config);
if(!$conexion) {
    header('Location: error.php');
};
$posts = obtener_post($blog_config['post_por_pagina'],$conexion);

if(!$posts){
    header('Location: error.php');
}
require "views/index.view.php";

?>