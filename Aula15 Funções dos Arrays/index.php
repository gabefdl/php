<?php 
$nomes = ['gabriel', 'helloê'];

// verificar se uma variável é array
$r1 = is_array($nomes);
echo $r1, '<br>';


// contar quantos elementos tem
$r2 = count($nomes);
echo $r2, '<br>';

//adicionar elementos no final 
$r3 = array_push($nomes, 'GABRIEL');
echo '<pre>';
print_r($nomes);
echo '</pre>';

// adiconar elemento no inicio
$r4 = array_unshift($nomes, 'HELLOÊ', 'EGMAR');
echo '<pre>';
print_r($nomes);
echo '</pre>';


// remover elementos no final
$r5 = array_pop($nomes); // tirou o GABRIEL
echo '<pre>';
print_r($nomes);
echo '</pre>';
echo $r5, '<br>'; // recebeu o GABRIEL

// remover elementos no inicio 
$r6 = array_shift($nomes);
echo '<pre>';
print_r($nomes);
echo '</pre>';
echo $r6, '<br>';

// remover elementos especificos
unset($nomes[1]);
echo '<pre>';
print_r($nomes);
echo '</pre>';



