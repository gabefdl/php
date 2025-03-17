<?php 
// Match Case

$estado_encomenda = 'em processamento';

$resultado = match($estado_encomenda) {
    'em processamento' => 'a encomenda está sendo tratada',
    'anulada', 'entregue' => 'é isto aí',
    default => 'erro'
};

echo $resultado, '<br>';


$valor = 101;

$resultado2 = match(true) {
    $valor > 100 => 'Valor maior que 100',
    $valor == 100 => 'Valor igual a 100',
    $valor < 100 => 'Valor menor que 100'
};

echo $resultado2;