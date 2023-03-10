<?php

require "funciones/funciones.php";

$conexion = conexion('cursophp_galeria','root','');
if(!$conexion){
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if($id == false){
    header('Location: index.php');
}

$statement = $conexion->prepare("SELECT * FROM fotos WHERE id = :id");
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

if (!$foto){
    header('Location: index.php');
}

require "views/foto.view.php";

?>
