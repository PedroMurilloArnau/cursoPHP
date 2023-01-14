<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e6ef5f65f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stilos.css">
    <title>IniciarSesion</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesion</h1>
        <a href="cerrar.php">cerrar sesion</a>
        <hr class="border">
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario"
             class="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <i class="icono izquierda fa fa-lock"></i><input type="password" name="password"
             class="password_btn" placeholder="Contraseña">
             <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
        </div>
        <?php if(!empty($errores)): ?>
            <div class="errores">
                <?php echo $errores;?>
            </div>
        <?php endif;?>
    </form>
    <p class="texto-registrate">
        ¿ Aun no tienes cuenta ?
        <a href="registrate.php">Registrate</a>
    </p>
</body>
</html>