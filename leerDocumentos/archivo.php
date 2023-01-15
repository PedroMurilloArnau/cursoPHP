<?php

#Vamos a relaizar la busqueda de los documentos y su lectura

$resultado = file_exists('documento.txt');
var_dump($resultado);

if(file_exists('documento.txt')){
    echo "El archivo existe" . "</br>";
}else {
    echo "El archivo no existe" . '</br>';
}

//de esta manera podermos acceder al archivo y localizar el documento

echo file_get_contents('documento.txt') . '</br>';

//De la siguiente manera podemos agregar info a nuenstros archivos
//Pero sobreescribimos la info de nuestro archivo

file_put_contents('documento.txt', "Hola Arturo \n", FILE_APPEND);

echo file_get_contents('documento.txt');

//Ejercicio para agregarinformacion

file_put_contents('documento.txt','');
for($i=1; $i <= 10 ; $i++){
    file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}

//Vamos a realizar comprobaciones sobre los archivos o recorrerlo para agregar info a bd
$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);
echo "</pre>";
if($archivo[3]  == '4' ){
    Echo "Guardado correctamente";
}

?>