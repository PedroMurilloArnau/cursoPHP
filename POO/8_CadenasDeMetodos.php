<?php

#Clase para encadenar metodos a la hora de trabajar
// Para encadenar metodos tenemos que finalizar decho metodo
// mediante return $this.


class Usuario {
    public $nombre;
    public $email;

    function __construct($nombre,$email){
        $this->nombre = $nombre;
        $this->email = $email;
    }
    
    public function mostrarNombre(){
        echo 'Su nombre es: ' . $this->nombre . '<br/>';
        return $this;
    }
    public function mostrarEmail(){
        echo 'Su correo es: ' . $this->email . '<br/>';
        return $this;
    }
}

$carlos = new Usuario("Carlos","carlos@gmail.com");

$carlos->mostrarNombre()->mostrarEmail(); //A la hora de llamarlos lo hacemos de la siguiente forma

?>