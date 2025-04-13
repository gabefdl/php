<?php
// criar cookie
    $nome = 'meuprimeirocookie';
    $valor = 'conteudo_escolhido';
    $tempo = 3600; // 1 hora de duração
    setcookie($nome, $valor, time() + $tempo); // "time() é o tempo atual do browser

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

    <h3>Criar Cookie</h3>
    <hr>
    <p>Cookie criado com sucesso!</p>
</body>
</html>