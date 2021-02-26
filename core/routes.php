<?php

$request = explode('?', $_SERVER['REQUEST_URI'], 2);

$requestUri = $_SERVER['REQUEST_URI'];

switch($request[0]) {
    case '/':
        require URL_VIEW.'/main.php';
        break;
    case '';
        require URL_VIEW.'/main.php';
        break;
    case '/index';
        require URL_VIEW.'/main.php';
        break;
    case '/create':
        require URL_VIEW.'/create.php';
        break;
    case '/update':
        require URL_VIEW.'/update.php';
        break;

}

?>