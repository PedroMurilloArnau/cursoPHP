<?php

//Vamos a trabajar con las herencias
//Los echo fuera de las funciones.
//Mediante la herencia pasamos las propiedades y metodos del padre al hijo.

class Genero {
    public $nombre;
    public $edad;
    public $pais;
    public $texto = "Primer texto";


    function __construct($nombre,$edad,$pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    } 

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad' . "<br/>" ;
    }
}

class Estudiante extends Genero{

    //Estamos sobreescribiendo el atributo texto dentro de la clase que hereda
    public $texto = 'Hola mundo';
    public $carrera;

    function __construct($nombre,$edad,$pais,$carrera){
        //de esta forma nos traemos del metodo constructor padre el nombre edad y pais.
        parent::__construct($nombre,$edad,$pais);
        $this->carrera = $carrera;
    } 
}

$carlos = new Estudiante('Carlos',35,'España','desarrollador');

echo $carlos->mostrarInformacion();
echo $carlos->texto;

?>