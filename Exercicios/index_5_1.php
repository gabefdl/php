<!-- Construir uma lógica condicional de apresentação de email correspondente quando  valor de cidade é alterado -->
<?php
    $lojas = [
        "porto velho" => [
            'email' => 'porto_velho@gmail.com'],

        "ariquemes" => [
            'email' => 'ariquemes@gmail.com'],

        "vilhena" => [
            'email' => 'vilhena@gmail.com'] 
    ];

    $cidade = 'ariquemes' 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
 </head>
 <body>
    <?php if(key_exists($cidade, $lojas)): ?>
        <h3><?= $cidade ?></h3>
        <p><?= $lojas[$cidade]['email']?></p>
    <?php else: ?>
        <p>Não há filial nesta cidade</p>
    <?php endif; ?> 
 </body>
 </html>