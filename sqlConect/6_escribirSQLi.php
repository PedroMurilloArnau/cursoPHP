<?php

    #Vamos a ver como escribir datos en nuestra base de datos
    //En este caso utilizando Query, pueden inyectar codigo.
        
$conexion = new mysqli('127.0.0.1:3307','root','','prueba_datosci');

if ($conexion->connect_errno){
    die('Lo siento hubo un error con el servidor');
} else {
    
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    
    $sql = "INSERT INTO usuarios(ID, nombre, edad) VALUES(null, 'Luis',50)";
    $conexion->query($sql);
    //mediante el metodo affected_rows nos devuelve el número de filas modificadas.
    if($conexion->affected_rows >= 1){
        echo "Se ha añadido correctamente el nuevo usuarios";
    }else{
        echo "No se ha anadido el nuevo usuario";
    }

}

?>