<?php

require_once 'app/Model/AdminModel.php';
require_once 'app/View/AdminView.php';

class AdminController {
    private $model;
    private $view;

    //instancio modelo y vista
    public function __construct() {
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    function sessionController() {
        $html = 'Login';
        echo $html;
    }

    function AdminController() {
        //$this->sessionController();
        $componentes = $this->AdminModel->getComponentesAdmin();
        $marcas = $this->AdminModel->getMarcasAdmin();
        $this->AdminView->renderAdministrarBBDD($componentes, $marcas);
    }

    function altaMarcaComponentes() {
        //$this->sessionController();
        $marcas = $this->AdminModel->getMarcasAdmin();
        $this->AdminView->renderAltaMarcaComponentes($marcas);
    }

    function altaMarca() {
        //$this->sessionController();
        if ((isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->AdminModel->altaNuevaMarca($nombre, $origen);
            $this->AdminView->showAdmin();
        }
    }

    function altaComponente() {
        //$this->sessionController();
        if ((isset($_POST['input-tipoComponente'])) && (isset($_POST['input-modeloComponente'])) && (isset($_POST['input-precio'])) && (isset($_POST['input-gama'])) && (isset($_POST['input-idMarca']))) {
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->AdminModel->altaNuevoComponente($tipo, $modelo, $precio, $gama, $id_marca);
            $this->AdminView->ShowAdmin();
        }
    }

    function deleteComponente($params = null) {
        //$this->sessionController();
        $componente_id = $params[':ID'];
        $this->AdminModel->bajaComponente($componente_id);
        $this->AdminView->ShowAdmin();
    }

    function deleteMarca($params = null) {
        //$this->sessionController();
        if ((isset($params[':ID']))) {
            $id_marca = $params[':ID'];
            $this->AdminModel->bajaMarca($id_marca);
            $this->AdminView->ShowAdmin();
        }
    }

    function modoEdicionComponente($params = null) {
        //$this->sessionController();
        if((isset($params[':ID']))) {
            $id_componente = $params[':ID'];
            $componente = $this->AdminModel->getComponenteInfoByID($id_componente);
            $this->AdminView->renderEdicionComponente($componente);
        }
    }

    function modoEdicionMarca($params = null) {
        //$this->sessionController();
        if((isset($params[':ID']))) {
            $id_marca = $params[':ID'];
            $marca = $this->AdminModel->getMarcaInfoByID($id_marca);
            $this->AdminView->renderEdicionMarca($marca);
        }
    }

    function editComponente($params = null) {
        //$this = sessionController();
        if ((isset($params[':ID'])) && (isset($_POST['input-tipoComponente'])) && (isset($_POST['input-modeloComponente'])) && (isset($_POST['input-precio'])) && (isset($_POST['input-gama'])) && (isset($_POST['input-idMarca']))) {
            $id_componente = $params[':ID'];
            $tipo = $_POST['input-tipoComponente'];
            $modelo = $_POST['input-modeloComponente'];
            $precio = $_POST['input-precio'];
            $gama = $_POST['input-gama'];
            $id_marca = $_POST['input-idMarca'];
            $this->AdminModel->modificarComponente($id_componente, $tipo, $modelo, $precio, $gama, $id_marca);
            $this->AdminView->ShowAdmin();
        }

    }

    function editMarca($params = null) {
        //$this = sessionController();
        if ((isset($params[':ID'])) && (isset($_POST['input-nombreMarca'])) && (isset($_POST['input-origenMarca']))) {
            $id_marca = $params[':ID'];
            $nombre = $_POST['input-nombreMarca'];
            $origen = $_POST['input-origenMarca'];
            $this->AdminModel->modificarMarca($id_marca, $nombre, $origen);
            $this->AdminView->showAdmin();
        }

    }





}