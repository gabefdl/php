<?php 
$cliente = [
    'nome' => "Gabriel",
    "apelido" => "Gabs",
    "idade" => 21, 
    "email" => "gabe.hfdl@gmail.com"
];

// mostrar um valor associativos de uma array
echo $cliente["apelido"];

// verificar se existe determinada key associada a uma array
var_dump(key_exists('telefone', $cliente)); // bool(false)

// array para string
$resultado = implode(' , ', $cliente);
var_dump($resultado);