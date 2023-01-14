<?php

    #Vamos a trabajar con Prepared Statements en SQLi
    
        
$conexion = new mysqli('127.0.0.1:3307','root','','prueba_datosci');

if ($conexion->connect_errno){
    die('Lo siento hubo un error con el servidor');
} else {
    
    $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre, edad)
     VALUES(?,?,?)");
    // Remmplazamos los placeholder ? con los valores a usar.
    // Una $ por placeholder que tengamos
    // s = string
    // i = integer
    // d = double

    $statement->bind_param('ssi', $id, $nombre, $edad);
    $id = null;
    if(isset($_GET['nombre']) && isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

        $statement->execute();
    }else {
        echo 'Falta introducir nombre y edad';
    }
    

    //mediante el metodo affected_rows nos devuelve el número de filas modificadas.
    if($conexion->affected_rows >= 1){
        echo "Se ha añadido correctamente el nuevo usuarios";
    }else{
        echo "No se ha anadido el nuevo usuario";
    }

}

?>