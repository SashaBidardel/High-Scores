<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Score</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Introduzca su nombre</label>
        <input type="text" id="name" name="nombre">
        <label for="points">Introduzca su puntuación</label>
        <input type="number" id="points" name="points">
        <input type="submit" name="btn" value="Enviar">
    </form>
     <?php
        include ('register.php');
        include('getTops.php');
        include('conexion.php');
        register($conect);
        getTops($conect);
        
     ?>
</body>
</html>