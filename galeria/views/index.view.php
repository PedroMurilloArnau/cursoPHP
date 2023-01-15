<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/9e6ef5f65f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Mi increible Galeria en PHP y MySQL</h1>
            <h1 class="titulo"><a class="subir_fotos"href="subir.php">Sube tus fotos</a><h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
        <?php foreach($fotos as $foto):?>
            <div class="thumb">
            <a href="foto.php?id=<?php echo $foto['id'];?>">
                <img src="imagenes/<?php echo $foto['imagen'];?>" alt="">
            </a>
            </div>
        <?php endforeach; ?>
        <div class="paginacion">
            <?php if ($pagina_actual > 1): ?>
                <a class="izquierda" href="index.php?p=<?php echo $pagina_actual-1;?>"><i class="fa fa-long-arrow-left"></i> Pagina anterior</a>
            <?php endif;?>
            <?php if ($total_paginas != $pagina_actual): ?>
                <a class="derecha" href="index.php?p=<?php echo $pagina_actual+1;?>">Pagina siguiente <i class="fa fa-long-arrow-right"></i></a>
            <?php endif;?>
        </div>
    </section>
    <footer>
        <p class="copyright"> <i class="fa-regular fa-copyright"></i> Galeria creada por Pedro Murillo - Repeter</p>
    </footer>
</body>
</html>