<?php 
$valor = 11;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if ($valor == 10): ?>
        <p>Valor é igual a 10</p>
    <?php else: ?>
        <p>Valor é diferente de 10</p>
    <?php endif; ?>

    <!-- Usando elseif -->

    <?php if ($valor > 100): ?>
        <p>O valor é maior que 100</p>
    <?php elseif ($valor > 50): ?>
        <p>O valor é maior que 50</p>
    <?php elseif ($valor > 20): ?>
        <p>O valor é maior que 20</p>
    <?php else: ?>
        <p>O valor não se encaixa em nenhuma condição.</p>
    <?php endif; ?>
</body>
</html>