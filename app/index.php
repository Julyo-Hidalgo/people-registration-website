<?php
include 'controller/pessoa_controller.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "Início";
    break;

    case '/pessoa':
        pessoa_controller::index();
    break;

    case '/pessoa/form':
        pessoa_controller::form();
    break;

    case '/pessoa/form/save':
        pessoa_controller::save();
    break;

    default:
        echo "erro 404";
    break;
}