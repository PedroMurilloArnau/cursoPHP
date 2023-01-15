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
    <title>Subir</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <!--Para poder subir archivos tenemos que agregar enctype="multipart/form-data-->
        <form class="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>"
         method="post" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">
            <label for="titulo">Selecciona el titulo de tu Foto</label>
            <input type="text" id="foto" name="titulo">
            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="ingresa una descripcion"></textarea>
            <?php if (isset($error)):?>
                <p class="error"><?php $error;?></p>
            <?php endif?>
            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>
    <footer>
        <p class="copyright"> <i class="fa-regular fa-copyright"></i> Galeria creada por Pedro Murillo - Repeter</p>
    </footer>
</body>
</html>