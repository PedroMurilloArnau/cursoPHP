<?php

    #Donde podemos acceder a una variable

    //Las variables globales se pueden acceder a ellas excepto de las funciones
    //En las funciones debemos pasarlas por parametros

    function mostrarNumero(){
        $numero = 10;
        return $numero;
    }

    echo mostrarNumero();

?>