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
echo "paso";
$id = limpiarDatos($_GET['id']);

if(!$id){
    header('Location: ' . RUTA . 'admin');
}

$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array(':id' => $id));

header('Location: ' . RUTA . 'admin');
?>