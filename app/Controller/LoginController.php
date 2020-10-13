<?php

require_once 'app/Model/AdminModel.php';
require_once 'app/View/AdminView.php';

class LoginController {
    private $model;
    private $view;

    //instancio modelo y vista
    public function __construct() {
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    function LoginController() {
        $this->view->renderLogin();

    }

}