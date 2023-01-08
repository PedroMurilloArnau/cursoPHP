<?php

    # Con esta funcion muestra valores legible es más util a la hora de trabajar
    
    $texto = "Pedro";
    $numero = 10;
    $numero2 = '5';
    $nombres = array('Carlos','Cesar','Pedro');
    $nombres_asociativos = array('nombre' => 'Pedro', 'edad' => 20);
    $boolean = true;

    print_r($texto);
    print_r($numero);
    print_r($numero2);
    print_r($nombres);
    print_r($nombres_asociativos);
    print_r($boolean);  //ojo que para valor false no aparece nada

?>