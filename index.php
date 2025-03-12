<?php

include 'header.php';

$pagina = $_GET['aaa'];

switch ($pagina) {

    case 'home': include 'views/home.php'; break;
    case 'login': include 'views/cadastro.php'; break;
    case 'contatos': include 'views/contacts.php'; break;
    default: include 'views/home.php';
    break;
}

include 'footer.php';
?>