<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formilario contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre :" value="
            <?php if(!$enviado && isset($nombre)){echo $nombre;}?>">
            <input type="text" class="form-control" id="email" name="email" placeholder="Correo :" value="
            <?php if(!$enviado && isset($email)){echo $email;}?>">
            <textarea name="message" class="form-control" id="message" placeholder="message"></textarea>
            <?php if ($errores != ""): ?>
                <div class="alert error">
                    <?php echo $errores;?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Mensaje enviado</p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>