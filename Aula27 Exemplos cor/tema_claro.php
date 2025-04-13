<?php 
setcookie('tema', 'light', time() + 3600);
header('Location: index.php');  // redirecionamento automático para o index