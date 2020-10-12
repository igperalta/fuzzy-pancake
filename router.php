<?php

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    require_once 'app/Controller/PublicController.php';
    require_once 'app/Controller/LoginController.php';
    require_once 'app/Controller/AdminController.php';

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }

    $params = explode('/', $action);



    $PublicController = new PublicController();
    $LoginController = new LoginController();
    $AdminController = new AdminController();


    switch($params[0]) {

        case 'home': 
            $PublicController->homeController();
        break;

        case '': 
            $PublicController->homeController();
        break;

        case 'servicios': 
            $PublicController->serviciosController();
        break;

        case 'administrador':
            $LoginController->LoginController();
        break;
        /*default: echo getHome("");*/
    } 