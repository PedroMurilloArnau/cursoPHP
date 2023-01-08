<?php

session_start();

if ($_SESSION){
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, $nombre</h1>";
} else {
    echo "<h1>No has iniciado sesison</h1>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <a href="index.php">Ir a la pagina de inicio</a>
    <a href="cerrar.php">cerrar sesion</a>
</body>
</html>