<?php 

$paises = [
    'Brasil' => ['Rondônia', 'Amazonas', 'Ceará'],
    'Itália' => ['Roma', 'Veneza'],
    'Argentina' => ['Buenos Aires', 'Pararara'],
    'Peru' => ['Lima']
];

foreach($paises as $pais=>$cidades) {
    echo "<h3><u>$pais</u></h3>";

    foreach($cidades as $cidade){
        if($cidade == 'Buenos Aires'){
            break 2;
        }
        echo "<p>$cidade</p>";
    }
}