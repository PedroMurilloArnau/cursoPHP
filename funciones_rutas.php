<?php

#Metodos para conocer la ruta de un archivo

    //PATHINFO_DIRNAME Nos dice la ruta
    //PATHINFO_BASENAME Nos dice el nombre del archivo con su extension
    //PATHINFO_EXTENSION Nos dice la extension a la que hacemos referencia
    //PATHINFO_FILENAME Nos dice el nombre del documento

    echo pathinfo('carpeta/documento.txt', PATHINFO_FILENAME);

    //Con el metodo glob podemos seleccionar todos los archivos que tngan un parametro

    $resultados = glob('sqlConect/*.{php,html,txt}', GLOB_BRACE);
    echo "<pre>";
    print_r($resultados);
    echo "</pre>";

    echo "<a href='https://www.php.net/manual/es/function.glob.php'>Mas info glob</a></br>";

    //Para conocer el nombre del archivo utilizando basename
    //Podemos eliminar las partes que no queramos mostrar
    
    echo basename('carpeta/carpeta2/archivo.php','.php') . "</br>";

    //Para conocer el directorio padre de la ruta.

    echo dirname('carpeta/carpeta2/archivo.php');
?>