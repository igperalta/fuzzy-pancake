<?php

require_once 'app/Model/ComponentsModel.php';
require_once 'app/Model/BrandsModel.php';
require_once 'app/Model/UsersModel.php';
require_once 'app/Model/CommentsModel.php';
require_once 'app/Helper/AuthHelper.php';
require_once 'app/View/PublicView.php';

class PublicController
{
    private $componentsModel;
    private $brandsModel;
    private $usersModel;
    private $commentsModel;
    private $authHelper;
    private $view;

    //instancio modelo y vista
    public function __construct()
    {
        $this->componentsModel = new ComponentsModel();
        $this->brandsModel = new BrandsModel();
        $this->usersModel = new UsersModel();
        $this->commentsModel = new CommentsModel();
        $this->authHelper = new AuthHelper();
        $this->view = new PublicView();
    }

    function homeController()
    {
        $this->view->renderHome();
    }

    function LoginController()
    {
        $this->view->renderLogin();
    }

    function registerController()
    {
        $this->view->renderRegistration();
    }

    function VerifyLogin()
    {
        $user = $_POST["input-email"];
        $pass = $_POST["input-pass"];

        if (isset($user)) {
            $DB_user = $this->usersModel->getUser($user);
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
                $this->usersModel->insertUser($user, $encrypted_pass);
                $DB_user = $this->usersModel->getUser($user);
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
        $components = $this->componentsModel->getComponents();
        $brands = $this->brandsModel->getBrands();
        $this->view->renderServicios($components, $brands);
    }

    function detalleComponente()
    {
        if ((isset($_REQUEST['id']))) {
            $id = $_REQUEST['id'];
            $component = $this->componentsModel->getComponentByID($id);
            $this->view->renderComponenteByID($component);
        }
    }

    function detalleMarca()
    {
        if ((isset($_REQUEST['nombre']))) {
            $name = $_REQUEST['nombre'];
            $brand = $this->brandsModel->getBrandByName($name);
            $this->view->renderMarcaByNombre($brand);
        }
    }

    function filtrarComponente()
    {
        //verifica datos obligatorios
        if ((isset($_POST['input-idMarca']))) {
            $id_brand = $_POST['input-idMarca'];
            $components = $this->componentsModel->getComponentsByBrand($id_brand);
            $brand = $this->brandsModel->getBrandByID($id_brand);
            $this->view->renderComponentesPorMarca($brand, $components);
        }
    }
}
