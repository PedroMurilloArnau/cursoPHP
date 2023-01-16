
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e6ef5f65f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo RUTA;?>css/estilos.css">
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA;?>">Mi primer Blog</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar"
                action="<?php echo RUTA; ?>/buscar.php" method="get">
                <input type="text" name="busqueda" placeholder="buscar">
                <button type="submit" class="icono fa fa-search"></button>
            </form>
            <nav class="menu">
                <ul>
                    <li><a href="https://twitter.com/repeter21"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/pedro.murilloarnau"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
                </ul>
            </nav>
            </div>
        </div>
    </header>