<?php

#Vamos a ver las condicionales y como trabajar con operadores:

/*
    == operador de igualdad
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que
    != diferente
    ! negacion
*/
/* Operadores logicos

    &&      evalua las dos condiciones se cumplen
    ||, or  evalua que se cumpla 1 de las condicion
    xor     evalua que se cumpla 1 y solo una condicon

*/

$edad = 9;
$nombre = 'Carlos';

if($edad >= 10 && $nombre == 'Pedro'){

    echo '<ol><li> Ya eres todo un niño </li></ol>' ; 
}
else if ($nombre == 'Pedro'){

    echo '<ol><li> Hola Pedro recuadra que entraras al tener mas de 10
     </li></ol>';
}
else if ($nombre != 'Pedro'){

    echo '<h1>Aceceso denegado</h1>';
}
/*
if($edad < 10 or $nombre != 'Pedro'){

    echo '<ol><li> Acceso denegado </li></ol>';
}*/

//isset si una variable tiene valor o no
echo '</br>';
$edad = null;
$edad = (isset($edad)) ? $edad : 'El usuario no compartio su edad';
echo isset($edad); // Representa el valor 1 dado que la respuesta es true
echo '</br>';
echo $edad;


?>