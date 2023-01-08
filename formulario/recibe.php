<?php

    //print_r($_POST); //De esta forma podemos mostrar como recogemos los datos
    //Con el metodo post podemos enviar archivos informacion no manipulada
    /*
    if(!$_POST) {
        header('Location: http://localhost/curso_php/formulario/index.php');
    } else {
        $nombre = $_POST['nombre'];
        $sexo = $_POST['sexo'];
        $year = $_POST['year'];
        if($_POST['terminos'] == "ok"){
            $terminos = "si";
        }else{
            $terminos = "no";
            echo '<h1>' . "Al no aceptar los terminos no se muestra nada" . '</h1>';
            die();
        }
    }*/
    if(!$_GET){
        header('Location: http://localhost/curso_php/formulario/index.php');
    }
    $nombre = $_GET['nombre'];
    $nombre = htmlspecialchars($_GET['nombre']);
    $sexo = htmlspecialchars($_GET['sexo']);
    $year = htmlspecialchars($_GET['year']);
    if($_GET['terminos'] == "ok"){
        $terminos = "si";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado del formulario</h1>
    <p>Su nombre es : <?php echo $nombre?></p>
    <p>Su genero es : <?php echo $sexo?></p>
    <p>Nacido el : <?php echo $year?></p>
    <p>¿Acepto los terminos ? <?php echo $terminos?></p>
</body>
</html>