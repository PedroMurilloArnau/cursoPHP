<?php

session_start();

require 'admin/config.php';
require 'funciones/functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limpiarDatos($_POST['usuario']);
    $pasword = limpiarDatos($_POST['password']);


    if ($usuario == $blog_admin['usuario'] && $pasword == $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
       header('Location:' . RUTA . 'admin');
    }
}

require 'views/login.view.php';

?>