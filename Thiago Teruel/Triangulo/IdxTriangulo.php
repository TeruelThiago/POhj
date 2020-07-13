<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

</head>

<body>

    <form method="POST">
        <input type="text" id="base" name="base" value="Digite a base"><br>
        <input type="text" id="altura" name="altura" value="Digte a altura"><br>
        <input type="submit" value="Enviar">
    </form>

</body>

<?php

$base1 = $_POST['base'];
$altura1 = $_POST['altura'];

    require_once 'Triangulo.php' ;

    $triangulo = new Triangulo();
    $triangulo->setBase($base1);
    $triangulo->setAltura($altura1);
    echo $triangulo->imprimir();
    echo $triangulo->area($triangulo->getBase(), $triangulo->getAltura());

?>

</html>