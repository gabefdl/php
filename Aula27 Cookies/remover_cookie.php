<?php
    $nome = 'meuprimeirocookie';
    setcookie($nome,'', time() - 1); 

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

    <h3>Remover Cookie</h3>
    <hr>
    <p>Cookie removido com sucesso!</p>
</body>
</html>