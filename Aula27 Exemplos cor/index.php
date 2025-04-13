<?php 
$tema = !empty($_COOKIE['tema']) ? $_COOKIE['tema'] : 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .light {
        background-color: white;
        color: black;
    }

    .dark {
        background-color: black;
        color: white;
    }

    a {
        color: red;
    }
</style>
<body class="<?= $tema ?>">
    
    <a href="tema_escuro.php">Dark mode</a>
    <a href="tema_claro.php">Light mode</a>

    <h1>Exemplo simples de tema com cookies</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ab doloribus, eveniet cumque dolore aspernatur, eligendi saepe pariatur nobis sit dolores fuga, reprehenderit sunt. Soluta inventore ea consectetur veritatis eum?</p>
</body>
</html>