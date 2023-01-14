<?php

# Conexion mediante PDO y llamadas mediante prepared statements.

if(isset($_GET['id'])){
$id = $_GET['id'];
}else{
$id = 1;
}

try{
    $conexion = new PDO('mysql:host=127.0.0.1:3307;dbname=prueba_datos','root','');
    
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
    $statement->execute( array (':id' => $id));

    //Si quires sacar el primer valor del array utilizamos fethc()
    //Si quremos extraer varios valor utilizamos fetchAll()

    $resultado = $statement->fetchAll();

    foreach($resultado as $fila){
        echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br/>';
    }

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>
