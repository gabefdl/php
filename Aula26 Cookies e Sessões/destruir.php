<?php
session_name('prolongar');
session_set_cookie_params(180);
session_start();
// destroi a variável da sessão
session_unset();
// destroi a sessão
session_destroy();
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
    <h2>Todos os valores da sessão e a própria sessão foram destruidos</h2>
</body>
</html>