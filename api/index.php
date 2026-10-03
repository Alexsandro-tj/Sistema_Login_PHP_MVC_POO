<?php
include_once __DIR__.'/../Controller/UsuariosController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        require_once __DIR__.'/../view/modules/usuarios/login.php';
        break;
    case '/user/listaCadastrados':
        echo "<p>Listadando Cadastrados</p>";
        break;
    case '/user/formCadastro':
        UsuariosController::formCadastro();
        break;
    case '/user/saveUser':
        UsuariosController::saveUser();
        break;
        case '':
    default:
        echo "Erro 404 (Not Found)";
        break;
}
