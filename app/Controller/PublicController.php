<?php

require_once 'app/Model/PublicModel.php';
require_once 'app/View/PublicView.php';
require_once 'app/Helper/AuthHelper.php';

class PublicController
{
    private $model;
    private $view;
    private $auth_helper;

    //instancio modelo y vista
    public function __construct()
    {
        $this->model = new PublicModel();
        $this->view = new PublicView();
        $this->auth_helper = new AuthHelper();
    }

    function homeController()
    {
        $this->view->renderHome();
    }

    function LoginController()
    {
        $this->view->renderLogin();
    }

    function VerifyLogin()
    {
        $user = $_POST["input-email"];
        $pass = $_POST["input-pass"];

        if (isset($user)) {
            $DB_user = $this->model->getUser($user);
            if ($DB_user) {
                if (password_verify($pass, $DB_user->password)) {
                    $this->auth_helper->loginUser($DB_user);
                } else {
                    $this->view->renderLogin("Password incorrecta.");
                }
            } else {
                $this->view->renderLogin("Usuario no encontrado.");
            }
        }
    }

    function serviciosController()
    {
        $componentes = $this->model->getComponentes();
        $marcas = $this->model->getMarcas();
        $this->view->renderServicios($componentes, $marcas);
    }

    function detalleComponente()
    {
        if ((isset($_REQUEST['id']))) {
            $id = $_REQUEST['id'];
            $componente = $this->model->getComponenteByID($id);
            $this->view->renderComponenteByID($componente);
        }
    }

    function detalleMarca()
    {
        if ((isset($_REQUEST['nombre']))) {
            $nombre = $_REQUEST['nombre'];
            $marca = $this->model->getMarcaByNombre($nombre);
            $this->view->renderMarcaByNombre($marca);
        }
    }

    function showComponentesPorMarca()
    {
        //verifica datos obligatorios
        if ((isset($_REQUEST['marca']))) {
            $marca = $_REQUEST['marca'];
            $componentes = $this->model->getComponentesPorMarca($marca);
            $this->view->renderComponentesPorMarca($marca, $componentes);
        }
    }
}
