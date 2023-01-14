<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: contenido.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $errores = '';
    if(empty($usuario) or empty($password)){
        $errores .= "<ul class='errorMes'><li>Por favor rellene todos los datos correctamente</li></ul>";
    }else{
        try{
            $conoxion = new PDO('mysql:host=127.0.0.1:3307;dbname=cursophp_login','root','');

        }catch(PDOException $e){
            echo "Error : " . $e->getMessage();
            die();
        }
        $statement = $conoxion->prepare("SELECT * FROM usuarios WHERE nombre = :usuario AND 
        pass = :pass LIMIT 1");
        $statement->execute(array(':usuario' => $usuario, ':pass' => $password));
        $resultado = $statement->fetch();
        if(!$resultado){
            $errores .= "<ul class='errorMes'><li class='errorMes'>El nombre del usuario es incorrecto o no existe</li>
            <li class='errorMes'>O la contraseña es icorrecta</li></ul>";
        }else{
            $_SESSION['usuario'] = $usuario;
            header('Location: contenido.php');
        }
    }
}
require 'views/login.view.php';

?>