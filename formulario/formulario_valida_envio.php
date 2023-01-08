<?php

$errores = '';

if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    if (!empty($nombre)){
        //$nombre = trim($nombre);
        //$nombre = htmlspecialchars($nombre);
        //$nombre = stripslashes($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else{
        $errores .= "Por favor agrega un nombre <br>";
    }
    if (!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores .= "Por favor agrega un email valido <br>";
        }
    } else{
        $errores .= "Por favor agrega un email";
    }
    echo "Lo enviado es $nombre y tu email es $email";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red
        }
    </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <br>
        <input type="text" placeholder="email" name="email">

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores;?></div>
        <?php endif; ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>