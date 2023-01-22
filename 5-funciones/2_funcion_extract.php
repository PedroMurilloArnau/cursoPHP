<?php

$array = array('nombre'=>'Pedro','apellido' => 'Murillo');

//Con esta funcion extraemos cada undo de las asociaciones como variables
extract($array);

echo $nombre . "</br>";

//Tambien podemos directamente modificar las variables
$nombre = 'Marcos';

echo $nombre . "</br>";
echo $array['nombre'] . "</br>";
echo $nombre . "</br>";


?>