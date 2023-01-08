<?php


    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "Se enviaron por metodo GET </br>";
    }else{
        echo "Se enviaron por el metodo $_SERVER[REQUEST_METHOD] </br>";
    }
    if (isset($_POST['submit'])){
        echo "Se han enviado los datos correctamente";
        print_r($_POST['submit']);
    }
?>