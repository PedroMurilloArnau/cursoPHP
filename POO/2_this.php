<?php
//Primer ejemplo de las clases.

    //Las primeras letras de las clases se ponene en mayuscula ojo periquin!!

    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        public function mostrarInformacion(){
            echo $this->nombre . ' tiene ' . $this->edad . ' años de ead' . "<br/>" ;
        }

    }

    $carlos = new Persona;
    $carlos->nombre = 'Pedro';
    $carlos->edad = 35;
    $carlos->mostrarInformacion();

    $alejandro = new Persona;
    $alejandro->nombre = 'Alejandro';
    $alejandro->edad = 40;
    $alejandro->pais = 'Rusia';

    $alejandro->mostrarInformacion();

?>