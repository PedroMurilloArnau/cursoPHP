<?php

//Las funciones hacen una sola cosa ojo!!!


function calcular_area_triangulo($base,$altura){

    $resultado = ($base * $altura) / 2;
    return $resultado;
}

echo "El área del triango es de " . calcular_area_triangulo(2,3) . "m cuadrados";

# Funcioones para trabajar con cadenas de textos

$texto = '< > & " "';
$texto2 = '           Pedro        ';

echo htmlspecialchars($texto); //Proteccion para que no nos inyecten codigo
echo '</br>';
echo trim($texto2); //Nos elimina todos los espacios en blanco al inicio y al final
echo '</br>';
echo strlen(trim($texto2)); //Nos permite calcular el tamaño de una cadena
echo '</br>';
echo substr($texto2,11,5); //Nos retorna una subcadena de texto elegida
echo '</br>';
echo strtoupper($texto2); //Nos muestra en mayusculas nuestro texto
echo '</br>';
echo strtolower($texto2); //Nos pasa nuestro texto a minusculas
echo '</br>';
echo strpos($texto2,'P'); //Nos muestra la posicon del caracter en nuestro str
echo '</br>';

# Funciones para trabajar con arrays

$amigo = array('telefono' => 541687899, 'edad' => 20, 'pais' => 'Mexico');
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

extract($amigo);
echo $telefono;
echo '</br>';

$ultimo_dia = array_pop($semana); //Coge nuestro ultimo elemento del array y lo elimina
foreach ($semana as $dia){
    echo $dia . '</br>';
}
echo $ultimo_dia . '</br>';

echo join(' - ', $semana) . '</br>'; //Nos une nuestro array
echo count($semana) . '</br>'; //Cuenta los elementos de nuestro arreglo
sort($semana); //Nuestro array en orden ascendente
echo join(' - ', $semana) . '</br>';
rsort($semana); //Nuestro array en orden descendente
echo join(' - ', $semana) . '</br>';
$semana_reverse = array_reverse($semana); //array invertida
echo join(' - ', $semana_reverse) . '</br>';

# Funciones Matematicas

$numero = 15.564;

echo round($numero,2) . '</br>'; //Redondear un numero a un elemeneto determinado
echo rand(1,10) . '</br>'; //Obtiene un numero random entre 1 y 10
echo ceil(12.1) . '</br>'; //redondea hacia arriba
echo round(M_PI,2)  . '</br>'; //PAra determinadas constanters vienen redondeadas

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
    <P>Más info de funciones con string web oficial <a href="https://www.php.net/manual/en/ref.strings.php">enlace<a><p>
    <P>Más info de funciones para arrays <a href="https://www.php.net/manual/es/ref.array.php">enlace<a><p>
</body>
</html>

<?php
# Funcion die()
echo "Esto se ve";
die(); //Una vez que la ejecutemos deja de cargar la pagina
echo "esto no se ve";
?>