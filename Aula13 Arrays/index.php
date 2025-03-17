<?php 

// Forma com valores dos indices
$nomes = ["Gabriel", "Helloê"];
echo $nomes[1], "<br>";

// Forma com valores elecionados
$apelidos = [
    10 => "Lolô",
    20 => "Gabs"
];

echo $apelidos[10], "<br>";

// verificar se dado indice existe
var_dump(isset($apelidos[30]));
echo "<br>";

// Alterar valores
$nomes[0] = "Heloiso";
print_r($nomes);
echo '<br>';

// Adicionar valores forma 1
$nomes[] = "Egmar";
print_r($nomes);
echo '<br>';
// ou 
array_push($nomes, "Nilda", "Davi");
echo '<pre>';
print_r($nomes);
echo '</pre>';


// Remover 
unset($nomes[3]);
echo '<pre>';
print_r($nomes);
echo '</pre>';


// Adicionar valores associativos
$empresa = [
    'ceo' => "Helloê",
    'socio' => "Gabriel"
];
echo '<pre>';
print_r($empresa);
echo '</pre>';

// Adicionar valores associativos
$empresa['proletario'] = "Fulano";
echo '<pre>';
print_r($empresa);
echo '</pre>';

echo $empresa['ceo'];


