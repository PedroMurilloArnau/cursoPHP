<?php

if (isset($_COOKIE['font-size'])){
    //Debes de utilizar htmlspecialchars para protegerte de inyeccion de codigo
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamaño = '15px';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p{
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
         commodi corporis, incidunt doloremque cupiditate, amet reprehenderit
          praesentium omnis officia, earum voluptatibus
         facilis distinctio neque perferendis id in veritatis et debitis.</p>
</body>
</html>