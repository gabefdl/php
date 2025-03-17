<?php 

// switch case

$estado_encomenda = 'EM TRÂNSITO';

switch ($estado_encomenda) {
    case 'EM TRÂNSITO':
        echo $estado_encomenda;
        break;

// pode ter mais de um case no mesmo código
    case 'anulado':
    case 'em processamento': 
        echo $estado_encomenda;
        break;

    default:
        echo "ERRO";
        break;
}