<?php

# La mejor manera de recorrer un arreglo tanto para arrays como arrays asociativos

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio'
,'Agosto','Septiembre','Octubre','Noviembre','Diciembre');

$alejandro = array('telefono' => 5631313, 'edad' => 23, 'pais' => 'España')
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
    <h1>Meses</h1>
    <ul>
        <?php

            foreach($meses as $mes){
                echo '<li>'. $mes . '</li>';
            }

            
        ?>
    </ul>
    <ul>
        <?php

            foreach($alejandro as $dato => $valor){
                echo '<li>'. $dato . " : ". $valor . '</li>';
            }
        ?>
    </ul>
</body>
</html>