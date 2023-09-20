<?php
function carregarPagina($rota)
{
    switch ($rota) {
        case 'login':
            include 'src/pages/login.php';
            break;
        case 'outra-rota':
            include 'src/pages/outra-rota.php';
            break;
        case 'solicitar-servico':
            include 'src/pages/Cliente/solicitar-servico.php';
            break;
        case 'cadastro-cliente':
            include 'src/pages/Cliente/cadastro-cliente.php';
            break;
        case 'cadastro-prestador':
            include 'src/pages/Cliente/cadastro-prestador.php';
            break;
        default:
            include 'src/pages/index.php';
            break;
    }
}

$rota = isset($_GET['url']) ? $_GET['url'] : '';

carregarPagina($rota);
