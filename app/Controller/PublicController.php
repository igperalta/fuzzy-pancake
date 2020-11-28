<?php

require_once 'app/Model/ComponentModel.php';
require_once 'app/Model/BrandModel.php';
require_once 'app/Model/UserModel.php';
require_once 'app/Model/CommentModel.php';
require_once 'app/Helper/AuthHelper.php';
require_once 'app/View/PublicView.php';

class PublicController
{
    private $componentModel;
    private $brandModel;
    private $userModel;
    private $commentModel;
    private $authHelper;
    private $view;

    //instancio modelo y vista
    public function __construct()
    {
        $this->componentModel = new ComponentModel();
        $this->brandModel = new BrandModel();
        $this->userModel = new UserModel();
        $this->commentModel = new CommentModel();
        $this->authHelper = new AuthHelper();
        $this->view = new PublicView();
    }

    function homeController($params = null)
    {
        $this->view->renderHome();
    }

    function LoginController($params = null)
    {
        $this->view->renderLogin();
    }

    function registerController($params = null)
    {
        $this->view->renderRegistration();
    }

    function VerifyLogin()
    {
        $user = $_POST["input-email"];
        $pass = $_POST["input-pass"];

        if (isset($user)) {
            $DB_user = $this->userModel->getUser($user);
            if ($DB_user and isset($pass)) {
                if (password_verify($pass, $DB_user->password)) {
                    $this->authHelper->loginUser($DB_user);
                } else {
                    $this->view->renderLogin("Password incorrecta.");
                }
            } else {
                $this->view->renderLogin("Usuario no encontrado.");
            }
        }
    }

    function registerUser()
    {

        if (isset($_POST["input-email"]) and $_POST["input-email"] != "") {
            $user = $_POST["input-email"];
            if (isset($_POST["input-pass"]) and $_POST["input-pass"] != "") {
                $pass = $_POST["input-pass"];
                $encrypted_pass = password_hash($pass, PASSWORD_DEFAULT);
                $this->userModel->insertUser($user, $encrypted_pass);
                $DB_user = $this->userModel->getUser($user);
                $this->authHelper->loginUser($DB_user);
            } else {
                $this->view->renderRegistration("Ingrese una password valida");
            }
        } else {
            $this->view->renderRegistration("Ingrese un usuario valido");
        }
    }

    function serviciosController()
    {
        $components = $this->componentModel->getComponents();
        $brands = $this->brandModel->getBrands();
        $this->view->renderServicios($components, $brands);
    }

    function detalleComponente()
    {
        if ((isset($_REQUEST['id']))) {
            $id = $_REQUEST['id'];
            $component = $this->componentModel->getComponentByID($id);
            $this->view->renderComponenteByID($component);
        }
    }

    function detalleMarca()
    {
        if ((isset($_REQUEST['nombre']))) {
            $name = $_REQUEST['nombre'];
            $brand = $this->brandModel->getBrandByName($name);
            $this->view->renderMarcaByNombre($brand);
        }
    }

    function filtrarComponente()
    {
        //verifica datos obligatorios
        if ((isset($_POST['input-idMarca']))) {
            $id_brand = $_POST['input-idMarca'];
            $components = $this->componentModel->getComponentsByBrand($id_brand);
            $brand = $this->brandModel->getBrandByID($id_brand);
            $this->view->renderComponentesPorMarca($brand, $components);
        }
    }
}
