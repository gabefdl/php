<?php 

$file = fopen('testefopen.txt', 'w'); // 'w' para WRITE 'r' para READ e 'a' para APPEND
for($i = 0; $i <= 1000; $i++) {
    fputs($file, "3 x $i = " . (3 * $i) . PHP_EOL);
}
fclose($file);