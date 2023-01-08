<?php

    #Declaraciones de tipo escalar incorporada en php7

    declare(strict_types=1); //Seguridad para trabajar de forma stricta
    function cuadrado(int $numero){
        return $numero * $numero;
    
    }
$numero = 45645;
echo 'El cuadro de ' . $numero . ' es ' . cuadrado($numero) . '</br>';

    #Declaraciones de tipo devolucion
    
    function obtenerEedad() : int{ //Mediante la declaracion de : int marcamos la devolucion
        $edad = 23;
        return $edad;
    }
echo obtenerEedad() . '</br>';

    #Operador de nave espacial
    //  -   =   >
    //  1   0   -1

    //echo 1 <=> 1 . '</br>';

    $array_numero = array(1,15,5,69,6);
    // sort($array_numero);
/*    function comparar($a, $b){
        if($a == $b){
            return 0;
        } elseif($a > $b){
            return 1;
        } else {
            return -1;
        }
    }*/
    function comparar($a,$b){ //Se utilaza en empresas de estadistica
        return $a <=> $b;
    }
    usort($array_numero, 'comparar');

    echo implode(' - ',$array_numero);

?>