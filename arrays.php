<?php

# vamos a trabajar con nuestros arrays

use function PHPSTORM_META\type;

$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
echo $semana[1] . '<br />';

# Dentro de los metodos principales de los arrays estan los de contar

 echo count($semana) . '<br />';

$ultimo_dia = count($semana) - 1;
echo $semana[$ultimo_dia] . '<br />';

# Vamos a ordenar arreglos metodo short

$orden_semana = $semana;
sort($orden_semana);

# Podemos ordenar a la inversa mediante la metodo rsort

rsort($orden_semana);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de la semana</title>
</head>
<body>
    <h1>Mostrar dias de la semana</h1>
    <ul>
        <?php

        /* Podemos concatenar para poder representar repeticiones dentro de
        nuestro html*/
        foreach($semana as $dia){
            echo '<li>' . $dia . '</li>';
        }
        ?>
    </ul>
    <h2>Vamos a ordenar los dias de la semana de forma alfabetica</h2>
    <ul>
    <?php
    foreach($orden_semana as $dia_alfabeto){
        echo '<li>' . $dia_alfabeto . '</li>';
    }
    ?>
    </ul>
</body>
</html>