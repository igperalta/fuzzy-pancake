<?php

require_once 'app/Model/AdminModel.php';
require_once 'app/View/AdminView.php';

class AdminController
{
    private $model;
    private $view;

    //instancio modelo y vista
    public function __construct()
    {
        $this->VerifySession();
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    private function VerifySession()
    {
        session_start();
        if (!isset($_SESSION['current_user'])) {
            header("Location: " . LOGIN);
            die();
        }
    }

    function AdminController()
    {
        $componentes = $this->model->getComponentesAdmin();
        $marcas = $this->model->getMarcasAdmin();
        $this->view->renderAdministrarBBDD($componentes, $marcas);
    }

    function altaMarcaComponentes()
    {
        $marcas = $this->model->getMarcasAdmin();
        $this->view->renderAltaMarcaComponentes($marcas);
    }

    function altaMarca()
    {
        if ((isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->model->altaNuevaMarca($nombre, $origen);
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

    function deleteComponente($params = null)
    {
        $componente_id = $params[':ID'];
        $this->model->bajaComponente($componente_id);
        $this->view->ShowAdmin();
    }

    function deleteMarca($params = null)
    {
        if ((isset($params[':ID']))) {
            $id_marca = $params[':ID'];
            $this->model->bajaMarca($id_marca);
            $this->view->ShowAdmin();
        }
    }

    function modoEdicionComponente($params = null)
    {
        if ((isset($params[':ID']))) {
            $id_componente = $params[':ID'];
            $componente = $this->model->getComponenteInfoByID($id_componente);
            $this->view->renderEdicionComponente($componente);
        }
    }

    function modoEdicionMarca($params = null)
    {
        if ((isset($params[':ID']))) {
            $id_marca = $params[':ID'];
            $marca = $this->model->getMarcaInfoByID($id_marca);
            $this->view->renderEdicionMarca($marca);
        }
    }

    function editComponente($params = null)
    {
        if ((isset($params[':ID'])) && (isset($_POST['input-tipoComponente'])) && (isset($_POST['input-modeloComponente'])) && (isset($_POST['input-precio'])) && (isset($_POST['input-gama'])) && (isset($_POST['input-idMarca']))) {
            $id_componente = $params[':ID'];
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->model->modificarComponente($id_componente, $tipo, $modelo, $precio, $gama, $id_marca);
            $this->view->ShowAdmin();
        }
    }

    function editMarca($params = null)
    {
        if ((isset($params[':ID'])) && (isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $id_marca = $params[':ID'];
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->model->modificarMarca($id_marca, $nombre, $origen);
            $this->view->showAdmin();
        }
    }
}
