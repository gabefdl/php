<!-- Construir uma lógica condicional em que mostre apenas o valor da variável -->

<?php 
    $nome = 'Helloê'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <?php if($nome == 'Helloê'): ?>
        <p>Meu nome é Helloê</p>
    <?php elseif ($nome == 'Gabriel'): ?>
        <p>Meu nome é Gabriel</p>
    <?php elseif ($nome == 'Egmar'): ?>
        <p>Meu nome é Egmar</p>
    <?php else: ?>
        <p>Meu nome é desconhecido</p>
    <?php endif; ?>
</body>
</html>