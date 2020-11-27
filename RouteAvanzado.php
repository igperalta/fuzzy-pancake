<?php
    require_once 'app/Controller/PublicController.php';
    require_once 'app/Controller/AdminController.php';
    require_once 'app/Helper/AuthHelper.php';
    require_once 'RouterClass.php';

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    //PUBLICO
    $r->addRoute("", "GET", "PublicController", "homeController");

    $r->addRoute("home", "GET", "PublicController", "homeController");
    $r->addRoute("login", "GET", "PublicController", "LoginController");
    $r->addRoute("register", "GET", "PublicController", "registerController");
    $r->addRoute("logout", "GET", "AuthHelper", "logout");
    $r->addRoute("servicios", "GET", "PublicController", "serviciosController");
    $r->addRoute("detalle", "GET", "PublicController", "detalleComponente");
    $r->addRoute("filtrar", "GET", "PublicController", "detalleMarca");
    $r->addRoute("verifyLogin", "POST", "PublicController", "VerifyLogin");
    $r->addRoute("registerUser", "POST", "PublicController", "registerUser");
    $r->addRoute("filtrarComponente", "POST", "PublicController", "filtrarComponente");
    
    //ADMIN
    $r->addRoute("administration", "GET", "AdminController", "AdminController");

    $r->addRoute("altaComponente", "POST", "AdminController", "altaComponente");
    $r->addRoute("altaMarca", "POST", "AdminController", "altaMarca");
    $r->addRoute("initAltaComponente", "GET", "AdminController", "initInsertComponent");
    $r->addRoute("initAltaMarca", "GET", "AdminController", "initInsertBrand");
    
    $r->addRoute("deleteMarca", "GET", "AdminController", "deleteMarca");
    $r->addRoute("initEditarMarca", "GET", "AdminController", "modoEdicionMarca");
    $r->addRoute("editMarca", "POST", "AdminController", "editMarca");
    
    $r->addRoute("deleteComponente", "GET", "AdminController", "deleteComponente");
    $r->addRoute("initEditarComponente", "GET", "AdminController", "modoEdicionComponente");
    $r->addRoute("editComponente", "POST", "AdminController", "editComponente");

    $r->addRoute("toggleAdmin", "POST", "AdminController", "toggleAdmin");
    $r->addRoute("deleteUser", "POST", "AdminController", "deleteUser");




    //RUN
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 