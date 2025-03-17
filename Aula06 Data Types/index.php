<?php 

// Do tipo bool/booleano
$representar_dados = true;

// int / inteiros = valores sem casas decimais
$valor = 0;
$valor1 = 1000;

// float - valores flutuantes (com casas decimais)
$float1 = 1.5;
$float2 = 343534342.54453434;

// string - valores alfanuméricos
$nome = "Gabriel";
$apelido = "Gabs";
$frase_do_dia = 'Eu amo a Lolô';


// apresentar os dados
echo $representar_dados . '<br>';
echo '-------------------------------' . '<br>';
echo $valor . '<br>';
echo $valor1 . '<br>';
echo '-------------------------------' . '<br>';
echo $float1 . '<br>';
echo $float2 . '<br>';
echo '-------------------------------' . '<br>';
echo $nome . '<br>';
echo $apelido . '<br>';
echo $frase_do_dia . '<br>';

// apresentar os tipos de dados
echo '-------------------------------' . '<br>';
echo gettype($representar_dados) . '<br>'; 
echo gettype($valor1) . '<br>';
echo gettype($nome) . '<br>';
echo gettype($float2) . '<br>';

// apresentar informaçôes da variável
echo '-------------------------------' . '<br>';
var_dump($representar_dados);
echo '<br>';  
var_dump($valor1);
echo '<br>';  
var_dump($float2);
echo '<br>';  
var_dump($frase_do_dia);
echo '<br>';  