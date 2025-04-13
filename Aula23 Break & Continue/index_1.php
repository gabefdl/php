<?php 

$parar = 5;

for ($i = 0; $i <= 10; $i++){
    echo "$i<br>";
        if($i == $parar) {
            break;
        }
}

echo '<hr>';

$nomes = ["gabriel", 'helloê', 'pedro', 'egmar'];
$ignorar = 'pedro';

foreach($nomes as $nome){
        if($nome == $ignorar) continue;
        echo "$nome<br>";
}