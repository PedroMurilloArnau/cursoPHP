<?php

# en este apartado vamos a trabajar con los operadores matemáticos

/*
    Los principales serian los siguientes

    + suna
    - resta
    * multiplicacion
    / division el modulo
    % el resto

*/
$numero = 10;
$numero2 = 5;

echo '<h1> El resiltado de la suma es ' . $resultado_suma = $numero + $numero2 .
 '</h1>' . '</br>';
echo '<h1> El resiltado de la resta es ' . $resultado_suma = $numero - $numero2 .
'</h1>' . '</br>';
echo  '<h1> El resiltado de la multiplicacion es ' . $resultado_suma = $numero * $numero2 .
'</h1>' . '</br>';
echo  '<h1> El resiltado de la division es ' . $resultado_suma = $numero / $numero2 .
'</h1>' . '</br>';
echo  '<h1> El resto de la division es ' . $resultado_suma = $numero % $numero2 .
'</h1>' . '</br>';

/*
    Los operadores de asignacion

    = igual a
    += el numero mas algo
    -= el numero menos algo
    *= el numero por algo
    /= el numero entre algo su modulo

*/

$numero3 = 10;

echo $numero3 = 12;
echo $numero3 += 7;
echo $numero3 -= 2;
echo $numero3 /=2 ;

/*
    Los operadores de comparacion
    ==
    === identicos 
    !=, <>
    !==
    <
    >
    >=
    <=
*/

/*
    Los operadores logicos
    &&
    or, ||
    xor
    !
*/
/*
    Operadores de incremento y decremento
    ++ Incrementa en una unidad
    --
*/
$numero3++; //Lo mismo sirve para decrementar --
echo '<h1>' . ++$numero3  . '</h1>';

/*
    Operador de las cadenas de texto no se utilizan el + !!!
    .
    .=
*/

$texto = 'Cadeana de texto';
$texto2 = ', Otra cadena de texto';

$texto3 = $texto . $texto2;
echo $texto3;
echo '</br>';
$texto .= ', Otra cadena de texto';
echo $texto;
?>