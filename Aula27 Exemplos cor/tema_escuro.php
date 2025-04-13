<?php 
setcookie('tema', 'dark', time() + 3600);
header('Location: index.php');