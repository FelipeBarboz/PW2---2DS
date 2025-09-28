<?php
session_start();

$pagina = isset($_GET['aaa']) ? $_GET['aaa'] : 'home';

include 'views/templates/header.php';

switch ($pagina) {
    case 'home':
        include 'views/home.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
    case 'cadastro':
        include 'views/cadastro.php';
        break;
    case 'filmes':
        include 'views/add_filmes.php';
        break;
    case 'perfil':
        include 'views/dashboard.php';
        break;
    default:
        include 'views/home.php';
        break;
}

include 'views/templates/footer.php';
?>
