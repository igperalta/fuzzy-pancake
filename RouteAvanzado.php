<?php
    require_once 'app/Controller/PublicController.php';
    require_once 'app/Controller/AdminController.php';
    require_once 'app/Controller/LoginController.php';
    require_once 'RouterClass.php';

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    //PUBLIC CONTROLLER
    //funcionan
    $r->addRoute("home", "GET", "PublicController", "homeController");
    //no funcionan
    $r->addRoute("servicios", "GET", "PublicController", "serviciosController");
    $r->addRoute("detalle", "GET", "PublicController", "detalleComponente");
    $r->addRoute("filtrar", "GET", "PublicController", "detalleMarca");



    //ADMIN CONTROLLER
    $r->addRoute("administrador", "GET", "AdminController", "AdminController");


    //RUN
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 