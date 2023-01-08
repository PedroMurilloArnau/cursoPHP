<?PHP

if($_POST){
echo $_POST['nombre'];
}

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
    <!-- El formulario podemos enviarlo con el metodo post-->
    <!-- Recuerda para reenviar a la misma pagina mandarlo con el metodo htmlspecialchars-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br>
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
        </select>
        <br>
        <lable for="terminos">Aceptas los terminos</lable>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
        <input type="submit">
    </form>
</body>
</html>