<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: contenido.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    

    $errores = '';

    if(empty($usuario) or empty($password) or empty($password2)){
        $errores .= '<li>Por favor rellene todos los datos correctamente</li>';
    }else{
        try {
            $conoxion = new PDO('mysql:host=127.0.0.1:3307;dbname=cursophp_login','root','');
        } catch (PDOException $e){
            echo "Error:" . $e->getMessage();
        }
        
        $statement = $conoxion->prepare("SELECT * FROM usuarios WHERE nombre = :usuario LIMIT 1");
        $statement->execute(array(':usuario'=> $usuario));
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }else{

        //Vamos a hasear la contraseña
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);
        echo $password . $password2;
        if($password != $password2){
            $errores .= '<li>La contraseña no es identica</li>';
        }else {
            $statement = $conoxion->prepare("INSERT INTO usuarios (id,nombre,pass) VALUES 
            (null, :usuario, :pass)");
            $statement->execute(array(':usuario' => $usuario, ':pass' => $password));
            header('Location: login.php');
        }}
}
}

require 'views/registrate.view.php';

?>