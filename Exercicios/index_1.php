<?php 
$produtos = ['arroz', 'batata', 'laranja'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
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
        </ul>
</body>
</html>