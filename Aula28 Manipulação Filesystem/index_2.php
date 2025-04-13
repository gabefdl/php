<?php 

file_put_contents('tabuadado3.txt', '');

for($i = 1; $i <= 1000; $i++) {
    $resultado = "3 x $i = " . (3 * $i) . PHP_EOL; // pula linha
    file_put_contents('tabuadado3', $resultado, FILE_APPEND); 
}
echo 'Terminado';