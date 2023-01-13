<?php

    # Mediante PDO podemos trabajar con distintas bases de datos facil y rapido.
    //mediante la sintaxis podemos analizar cada parametro que vamos a incluir.
    //En los primeros parentesis ponemos el usuario y en el segundo la contraseña.
try{
    $conexion = new PDO('mysql:host=127.0.0.1:3307;dbname=prueba_datos','root','');
    echo "Conexion OK";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>

