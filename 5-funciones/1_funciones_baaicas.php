<?php

    # Bloques de codigo que queramos programar

    function saludo($nombre){
        echo "Saludo, $nombre";
    }
    function sumar($numero1,$numero2){
            $resultado = $numero1 + $numero2;
            echo $resultado;
    }
    
    # Retorno del valor de nuestras funciones
    // Recuerda que las funciones solo deben manejar la informacion no la transmiten

    function multiplicar($numero1,$numero2){
        $resultado = $numero1 * $numero2;
        return $resultado; //Debajo de return no se ejecuta nada mas
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php

            saludo("Pedro");
            echo '</br>';
            sumar(2,3);
            echo multiplicar(2,3);

        ?>
    </h1>
    <p>Mas funciones de php <a href="https://www.php.net/manual/en/functions.
    arrow.php">web oficial</a></p>
</body>
</html>
