<?php

require_once 'app/Model/AdminModel.php';
require_once 'app/View/AdminView.php';
require_once 'app/Helper/AuthHelper.php';

class AdminController
{
    private $model;
    private $view;
    private $auth_helper;

    //instancio modelo y vista
    public function __construct()
    {
        $this->auth_helper = new AuthHelper();
        $this->auth_helper->VerifySession();
        $this->view = new AdminView();
        $this->model = new AdminModel();
    }

    function AdminController()
    {
        $componentes = $this->model->getComponentesAdmin();
        $marcas = $this->model->getMarcasAdmin();
        $this->view->renderAdministrarBBDD($componentes, $marcas);
    }

    function initAltaComponente()
    {
        $marcas = $this->model->getMarcasAdmin();
        $this->view->renderAltaComponente($marcas);
    }

    function initAltaMarca()
    {
        $this->view->renderAltaMarca();
    }

    function altaMarca()
    {
        if ((isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $marca = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->model->altaNuevaMarca($marca, $origen);
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
        if (isset($_GET["id_componente"])) {
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
