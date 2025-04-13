<?php 

$valor = '[Não existe cookies]';
if(!empty($_COOKIE['meuprimeirocookie'])) {
    $valor = $_COOKIE['meuprimeirocookie'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php require_once 'nav.php' ?>

    <h3>Inicio</h3>
    <hr>
    <p>Valor do cookie: <?= $valor ?></p>
</body>
</html>