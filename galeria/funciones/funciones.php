<?php

function conexion($tabla, $usuario, $pass){
    try{
        $conexion = new PDO("mysql:host=127.0.0.1:3307;dbname=$tabla",$usuario,$pass);
        return $conexion;
    } catch(PDOException $e) {
        return false;
    }


}

?>