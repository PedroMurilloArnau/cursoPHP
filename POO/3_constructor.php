<?php
//En este tercer ejemplo vamos a trabajar el metodo creando constructores para ahorrar codigo.


    class Genero {
        public $nombre;
        public $edad;
        public $pais;

        function __construct($nombre,$edad,$pais){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        } 

        public function mostrarInformacion(){
            echo $this->nombre . ' tiene ' . $this->edad . ' años de ead' . "<br/>" ;
        }

    }

    $carlos = new Genero('Carlos',35,'España');

    $carlos->mostrarInformacion();

    $alejandro = new Genero('Alejandro',42,'Mexico');

    $alejandro->mostrarInformacion();

?>