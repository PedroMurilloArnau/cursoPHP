<?php

define('RUTA','http://localhost/curso_php/blog/');

$bd_config = array(
    'baseDatos' => 'cursophp_blog',
    'usuario' => 'root',
    'pass' => ''
);

$blog_config = array(
    'post_por_pagina' => '2',
    'carpeta_imagenes' => 'imagenes/',
    'post_por_pagina_admin' => '3',
);

$blog_admin = array(    
    'usuario' => 'Carlos',
    'password' => '123'
);
?>