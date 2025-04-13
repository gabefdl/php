<?php 
// usa para criar um cookie com uma sessão maior
session_name('prolongar');
session_set_cookie_params(180);
session_start();

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';

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

    <hr>
    <h2>Exercicio com sessôes de PHP</h2>

    <h3>Valor da variável 'nome'</h3>
    <h1><?= $nome ?></h1>

    <h3>Valor da variável 'apelido'</h3>
    <h1><?= $apelido ?></h1>
</body>
</html>