<?php
//Primer ejemplo de las clases.

    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        public function mostrarInformacion(){
            echo "Hola mundo soy ";
        }

    }

    $carlos = new Persona;
    $carlos->nombre = 'Carlos';
    $carlos->edad = 36;
    $carlos->pais = 'España';

    //$carlos->mostrarInformacion(); //de esta manera mostraríamos los metodos de la clase.
    echo $carlos->nombre . 'tiene ' . $carlos->edad . ' años de edad.';

    $alejandro = new Persona;
    $alejandro->nombre = 'Alejandro';
    $alejandro->edad = 26;
    $alejandro->pais = 'Mexico';


?>