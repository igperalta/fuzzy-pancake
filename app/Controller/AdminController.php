<?php

require_once 'app/Model/ComponentsModel.php';
require_once 'app/Model/BrandsModel.php';
require_once 'app/Model/UsersModel.php';
require_once 'app/Model/CommentsModel.php';
require_once 'app/Helper/AuthHelper.php';
require_once 'app/View/AdminView.php';

class AdminController
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
        $this->view = new AdminView();
        $this->authHelper->VerifyAdmin();
    }

    function AdminController()
    {
        $components = $this->componentsModel->getComponents();
        $brands = $this->brandsModel->getBrands();
        $this->view->renderAdministrarBBDD($components, $brands);
    }

    function initInsertComponent()
    {
        $brands = $this->brandsModel->getBrands();
        $this->view->renderInsertComponent($brands);
    }

    function initInsertBrand()
    {
        $this->view->renderInsertBrand();
    }

    function insertMarca()
    {
        if ((isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $brand = $_POST['input-nombreMarca'];
            $origin = $_POST['input-origenMarca'];
            $this->brandsModel->insertBrand($brand, $origin);
            $this->view->showAdmin();
        }
    }

    function altaComponente()
    {
        if ((isset($_POST['input-tipoComponente'])) && (isset($_POST['input-modeloComponente'])) && (isset($_POST['input-precio'])) && (isset($_POST['input-gama'])) && (isset($_POST['input-idMarca']))) {
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->model->altaNuevoComponente($tipo, $modelo, $precio, $gama, $id_marca);
            $this->view->ShowAdmin();
        }
    }

    function deleteComponente()
    {   
        if(isset($_GET["id_componente"])){
            $componente_id = $_GET["id_componente"];
            $this->model->bajaComponente($componente_id);
            $this->view->ShowAdmin();
        }
    }

    function deleteMarca()
    {
        if ((isset($_GET["id_marca"]))) {
            $id_marca = $_GET["id_marca"];
            $this->model->bajaMarca($id_marca);
            $this->view->ShowAdmin();
        }
    }

    function modoEdicionComponente()
    {
        if ((isset($_GET["id_componente"]))) {
            $id_componente = $_GET["id_componente"];
            $componente = $this->model->getComponenteInfoByID($id_componente);
            $this->view->renderEdicionComponente($componente);
        }
    }

    function modoEdicionMarca()
    {
        if ((isset($_GET["id_marca"]))) {
            $id_marca = $_GET["id_marca"];
            $marca = $this->model->getMarcaInfoByID($id_marca);
            $this->view->renderEdicionMarca($marca);
        }
    }

    function editComponente()
    {
        if ((isset($_POST['id_componente'])) && (isset($_POST['input-tipoComponente'])) && (isset($_POST['input-modeloComponente'])) && (isset($_POST['input-precio'])) && (isset($_POST['input-gama'])) && (isset($_POST['input-idMarca']))) {
            $id_componente = $_POST['id_componente'];
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->model->modificarComponente($id_componente, $tipo, $modelo, $precio, $gama, $id_marca);
            $this->view->ShowAdmin();
        }
    }

    function editMarca()
    {
        if ((isset($_POST['id_marca'])) && (isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $id_marca = $_POST["id_marca"];
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->model->modificarMarca($id_marca, $nombre, $origen);
            $this->view->showAdmin();
        }
    }
}
