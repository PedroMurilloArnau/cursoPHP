<?php

# String: así se definen las variables
$nombre = "Pedro";

# Integer: numeros enteros
$numero = 7;

# Double: numeros decimales
$numero_decimal = 7.8;

# Boolean: tipo de valor verdadero o falso (true o false)
$boolean = false;

# Array:
// nos permiten almacenar multiples valores
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
echo $semana[1] . '<br />';



# Associative array: array asociativo

$alex = array('telefono' => '9156656453','edad' => 25,
'apellido' => 'Garcia','pais' => 'España');
echo $alex['edad'] .'<br />';

# multidimensional array: array multidimensional

$amigos = array(
    array('Pedro',35),
    array('Wanli',25)
);
echo $amigos[0][0] .'<br />';

# Objeto:

# Class:

# NUll: cuando una variable no le asignamos ningun valor.

echo $nombre . '<br />';
echo $numero  . '<br />';
echo $numero_decimal . '<br />';
echo $boolean . '<br />';

echo "Hola $nombre"  . '<br />';
echo 'Hola ' . $nombre  . '<br />';

echo gettype($nombre);
?>