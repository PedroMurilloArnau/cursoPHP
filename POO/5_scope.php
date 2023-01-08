<?php
#Clase trabajando con el alcance de nuestros atributos.
    //Tendríamos 3 tipos de atributos:
    // Private   -> no se puede acceder desde fuera de la clase
    // Protectec -> no se puede acceder desde fuera de la clase y otras clases que heredan
    // Public    -> se puede acceder desde cualquier parte

class Usuario {
    public $nombre;
    protected $email;

    function __construct($nombre,$email){
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function mostrarInfo(){
        return $this->email;
    }
}

class Miembro extends Usuario {

    public function mostrarCorreo(){
        return $this->email;
    }

}

$carlos = new Miembro('Carlos','carlos@gmail.com');
echo $carlos->nombre . "<br/>";
echo $carlos->mostrarCorreo() . "<br/>";
//echo $carlos->email; //Como queremos acceder fuera de la calse que hereda arroja un error

?>