<?php

include 'header.php';

// Obtém o parâmetro 'aaa' da URL
$pagina = $_GET['aaa'] ?? 'home'; // Caso 'aaa' não seja passado, assume 'home'

switch ($pagina) {
    case 'home':
        include 'view/home.php';
        break;
    case 'login':
        include 'view/login.php';
        break;
    case 'cadastro':
        include 'view/cadastro.php';
        break;
    default:
        include 'view/home.php';
        break;
}

include 'footer.php';
?>
