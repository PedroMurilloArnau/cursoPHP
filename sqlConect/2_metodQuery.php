<?php

# Conexion mediante PDO con un metodo query:
    //sólo utilizalo cuando no puedan inyectarte código

$id = $_GET['id'];

try{
    $conexion = new PDO('mysql:host=127.0.0.1:3307;dbname=prueba_datos','root','');
    
    $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    foreach ($resultados as $fila){
        echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br/>';
    }

    $insertado = $conexion->query('INSERT INTO usuarios VALUES(null,"Paco")');

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>
