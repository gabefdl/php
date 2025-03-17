<?php 

// Constantes são valores fixos e com letras maiúsculas
define('NOME', 'Helloê');

define('TAXA_FIXA', 10);

// mostrar a constante
echo TAXA_FIXA;

// pular linha
echo '<br>';

// usar o valor de uma constante
$preco_inicial = 500;
$preco_final = $preco_inicial + TAXA_FIXA;
echo $preco_final;

echo '<br>';

//  PHP twm as suas próprias constantes
echo PHP_VERSION;

// Constantes mágicas (definidas dinamicamente)
echo "Estou na linha de código " .__LINE__;