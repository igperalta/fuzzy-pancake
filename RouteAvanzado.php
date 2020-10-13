<?php
    require_once 'app/Controller/PublicController.php';
    require_once 'app/Controller/AdminController.php';
    require_once 'RouterClass.php';

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    $r->addRoute("home", "GET", "PublicController", "homeController");
    $r->addRoute("login", "GET", "PublicController", "LoginController");
    $r->addRoute("logout", "GET", "PublicController", "Logout");
    $r->addRoute("administration", "GET", "AdminController", "AdminController");
    $r->addRoute("servicios", "GET", "PublicController", "serviciosController");
    $r->addRoute("detalle", "GET", "PublicController", "detalleComponente");
    $r->addRoute("filtrar", "GET", "PublicController", "detalleMarca");
    $r->addRoute("verifyLogin", "POST", "PublicController", "VerifyLogin");





    //RUN
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 