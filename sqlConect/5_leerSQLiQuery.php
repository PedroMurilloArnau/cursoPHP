<?php

    #De esta forma podemos realizar una conxion y traer datos mediante Query
        //Problema es la falta de seguiridad
        //Para practicar con este ejercicio poner en el nav ?id=5
        //Tambien vemos que podemos modificar la llamada y los errores que te arrojan
        
$conexion = new mysqli('127.0.0.1:3307','root','','prueba_datosci');

if ($conexion->connect_errno){
    die('Lo siento hubo un error con el servidor');
} else {
    
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    
    $sql = "SELECT * FROM usuarios WHERE ID = $id";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows){

        while($fila = $resultado->fetch_assoc()){
            echo $fila['ID'] . ' - ' . $fila['nombre'] . '</br>';
        }

        // echo '<pre>'; //De la siguiente forma con fetch_assoc sacamos 1 resultado
        //var_dump($resultado->fetch_assoc());
        //var_dump($resultado->fetch_assoc());
        //echo '</pre>';

        //echo $resultado->fetch_assoc()['nombre'];
    }else {
        echo 'no hay datos';
    }
}

?>