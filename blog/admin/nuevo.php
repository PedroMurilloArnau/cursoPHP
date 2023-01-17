<?php

session_start();

require 'config.php';
require '../funciones/functions.php';

//Comprobamos que nuestra sesion está iniciada

comprobarSession();

//Creamos la conexion

$conexion = conexionbd($bd_config);
if(!$conexion) {
    header('Location: ../error.php');
};

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = ($_POST['texto']);
    $thumb = $_FILES['thumb']['temp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb,$archivo_subido);

    $statement = $conexion->prepare(
        'INSERT INTO articulos (id,titulo,extracto,texto,thumb)
        VALUES (null,:titulo,:extracto,:texto,:thumb)'
        );

    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . 'admin');
}

require '../views/nuevo.view.php';
?>