<?php

#Clase con características estaticas de nuestra clase.
// Para acceder a ellos se requieren de 2 pasos.
// Primero hay que declarar estatica mediante "static".
// Segundo debemos de llamarlas mediante una llamada a la clase y :: => Persona::saludo();


class Persona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null){
        return 'Hola, buen dia ' . $nombre . "<br/>";
    }
}

//$carlos = new Persona;

echo Persona::saludo("Carlos");
echo Persona::saludo();

?>