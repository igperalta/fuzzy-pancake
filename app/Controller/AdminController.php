<?php

require_once 'app/Model/ComponentModel.php';
require_once 'app/Model/BrandModel.php';
require_once 'app/Model/UserModel.php';
require_once 'app/Model/CommentModel.php';
require_once 'app/Helper/AuthHelper.php';
require_once 'app/View/AdminView.php';

class AdminController
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
        $this->view = new AdminView();
        $this->authHelper->VerifyAdmin();
    }

    function AdminController()
    {
        $components = $this->componentModel->getComponents();
        $brands = $this->brandModel->getBrands();
        $users = $this->userModel->getUsers();
        $this->view->renderAdministrarBBDD($components, $brands, $users);
    }

    function initInsertComponent()
    {
        $brands = $this->brandModel->getBrands();
        $this->view->renderInsertComponent($brands);
    }

    function initInsertBrand()
    {
        $this->view->renderInsertBrand();
    }

    function insertMarca()
    {
        if ((isset($_POST['input-nombreMarca'])) &&
            (isset($_POST['input-origenMarca'])) &&
            ($_POST['input-origenMarca'] != "") &&
            ($_POST['input-nombreMarca'] != "")
        ) {
            $brand = $_POST['input-nombreMarca'];
            $origin = $_POST['input-origenMarca'];
            $this->brandModel->insertBrand($brand, $origin);
            $this->view->showAdmin();
        }
    }

    function altaComponente()
    {
        if ((isset($_POST['input-tipoComponente'])) &&
            (isset($_POST['input-modeloComponente'])) &&
            (isset($_POST['input-precio'])) &&
            (isset($_POST['input-gama'])) &&
            (isset($_POST['input-idMarca'])) &&
            ($_POST['input-tipoComponente'] != "") &&
            ($_POST['input-modeloComponente'] != "") &&
            ($_POST['input-precio'] != "") &&
            ($_POST['input-gama'] != "") &&
            ($_POST['input-idMarca'] != "")
        ) {
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->componentModel->insertComponent($tipo, $modelo, $precio, $gama, $id_marca);
            $this->view->ShowAdmin();
        }
    }

    function deleteComponente()
    {
        if (isset($_GET["id_componente"]) && ($_GET["id_componente"] != "")) {
            $componente_id = $_GET["id_componente"];
            $this->componentModel->deleteComponent($componente_id);
            $this->view->ShowAdmin();
        }
    }

    function deleteMarca()
    {
        if ((isset($_GET["id_marca"])) && ($_GET["id_marca"] != "")) {
            $id_marca = $_GET["id_marca"];
            $this->brandModel->deleteBrand($id_marca);
            $this->view->ShowAdmin();
        }
    }

    function modoEdicionComponente()
    {
        if ((isset($_GET["id_componente"])) && ($_GET["id_componente"] != "")) {
            $id_componente = $_GET["id_componente"];
            $componente = $this->componentModel->getComponentInfoByID($id_componente);
            $this->view->renderEdicionComponente($componente);
        }
    }

    function modoEdicionMarca()
    {
        if ((isset($_GET["id_marca"])) && ($_GET["id_marca"] != "")) {
            $id_marca = $_GET["id_marca"];
            $marca = $this->brandModel->getBrandByID($id_marca);
            $this->view->renderEdicionMarca($marca);
        }
    }

    function editComponente()
    {
        if ((isset($_POST['id_componente'])) &&
            (isset($_POST['input-tipoComponente'])) &&
            (isset($_POST['input-modeloComponente'])) &&
            (isset($_POST['input-precio'])) &&
            (isset($_POST['input-gama'])) &&
            (isset($_POST['input-idMarca'])) &&
            ($_POST['id_componente'] != "") &&
            ($_POST['input-tipoComponente'] != "") &&
            ($_POST['input-modeloComponente'] != "") &&
            ($_POST['input-precio'] != "") &&
            ($_POST['input-gama'] != "") &&
            ($_POST['input-idMarca'] != "")
        ) {
            $id_componente = $_POST['id_componente'];
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->componentModel->updateComponent($id_componente, $tipo, $modelo, $precio, $gama, $id_marca);
            $this->view->ShowAdmin();
        }
    }

    function editMarca()
    {
        if ((isset($_POST['id_marca'])) &&
            (isset($_POST['input-nombreMarca'])) &&
            (isset($_POST['input-origenMarca'])) &&
            ($_POST['id_marca'] != "") &&
            ($_POST['input-nombreMarca'] != "") &&
            ($_POST['input-origenMarca'] != "")
        ) {
            $id_marca = $_POST["id_marca"];
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->brandModel->updateBrand($id_marca, $nombre, $origen);
            $this->view->showAdmin();
        }
    }

    function toggleAdmin()
    {
        if ((isset($_POST['id_user'])) && !empty($_POST['id_user'])) {
            $id_user = $_POST['id_user'];
            $this->userModel->toggleAdmin($id_user);
            $this->view->showAdmin();
        }
    }

    function deleteUser()
    {
        if ((isset($_POST['id_user'])) && !empty($_POST['id_user'])) {
            $id_user = $_POST['id_user'];
            $this->userModel->deleteUser($id_user);
            $this->view->ShowAdmin();
        }
    }
}
