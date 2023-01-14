<?php

# Conexion mediante PDO


try{
    $conexion = new PDO('mysql:host=127.0.0.1:3307;dbname=prueba_datos','root','');

    echo "Hola estoy conectado";


}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>

