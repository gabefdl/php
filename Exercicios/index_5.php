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

    $cidade = "porto velho" 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
 </head>
 <body>
    <?php if ($cidade == "porto velho"): ?>
        <h3>Porto Velho</h3>
        <p>O email da filial é <?= $lojas['porto velho']['email'] ?></p>
    <?php elseif ($cidade == "ariquemes"): ?>
        <h3>Ariquemes</h3>
        <p>O email da filial é <?= $lojas['ariquemes']['email'] ?></p>
    <?php elseif ($cidade == "vilhena"): ?>
        <h3>Vilhena</h3>
        <p>O email da filial é <?= $lojas['vilhena']['email'] ?></p>
    <?php else: ?>
        <h3>Não existe filial nesta cidade</h3>
    <?php endif; ?>
 </body>
 </html>