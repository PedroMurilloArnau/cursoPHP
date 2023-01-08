<?php

#Trabajando con clases abstractas

    //Con ellas solo podremos trabajar excepto que la heredemos.
    //Lo utilizamos para proteger nuestras clases.



abstract class Person {
    public function saludo(){
        return 'hola';
    }
}

class Estudiante extends Person {

}

//$carlos = new Person; //Nos dara error dado que no puede ejecutarse al ser una clase abstracta

$carlos = new Estudiante;

echo $carlos->saludo();

?>