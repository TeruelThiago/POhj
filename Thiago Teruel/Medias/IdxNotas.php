<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

</head>

<body>

    <form method="POST">
        <input type="text" id="nota1" name="nota1" value="Digite a 1º nota"><br>
        <input type="text" id="nota2" name="nota2" value="Digite a 2º nota"><br>
        <input type="text" id="nota3" name="nota3" value="Digite a 3º nota"><br>
        <input type="text" id="nota4" name="nota4" value="Digite a 4º nota"><br>
        <input type="submit" value="Enviar">
    </form>

</body>

<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];


    require_once 'Medias.php';

    $media = new Medias() ;
    $media->setNota1($nota1);
    $media->setNota2($nota2);
    $media->setNota3($nota3);
    $media->setNota4($nota4);
    
    echo $media->Media($media->getNota1(), $media->getNota2(), $media->getNota3(),  $media->getNota4());

?>

</html>