<!-- Reverter a ordem dos produtos e acrescentar dois itens -->

<?php 
$produtos = ['arroz', 'batata', 'laranja'];
$produtos = array_reverse($produtos)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
        <ul>
            <li>
                <?php echo $produtos[0]; ?>
            </li>

            <li>
                <?php echo $produtos[1]; ?>
            </li>

            <li>
                <?php echo $produtos[2]; ?>
            </li>

            <li>
                <?php $acrescentar = array_push($produtos, "maça", "pera"); 
                    echo $produtos[3]
                ?>
            </li>

            <li>
                <?= $produtos[4] ?>
            </li>
        </ul>
</body>
</html>