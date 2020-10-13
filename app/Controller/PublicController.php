<?php

require_once 'app/Model/PublicModel.php';
require_once 'app/View/PublicView.php';

class PublicController {
    private $model;
    private $view;

    //instancio modelo y vista
    public function __construct() {
        $this->model = new PublicModel();
        $this->view = new PublicView();
    }

    function homeController() {
        $this->view->renderHome();
    }

    function serviciosController() {
        $componentes = $this->model->getComponentes();
        $marcas = $this->model->getMarcas();
        $this->view->renderServicios($componentes, $marcas);
    }
    
    function detalleComponente() {
        if((isset($_REQUEST['id']))) {
            $id = $_REQUEST['id'];
            $componente = $this->PublicModel->getComponenteByID($id);
            $this->view->renderComponenteByID($componente);
        }
    }

    function detalleMarca() {
        if((isset($_REQUEST['nombre']))) {
            $nombre = $_REQUEST['nombre'];
            $marca = $this->PublicModel->getMarcaByNombre($nombre);
            $this->view->renderMarcaByNombre($marca);
        }
    }

    function showComponentesPorMarca() {
        //verifica datos obligatorios
        if ((isset($_REQUEST['marca']))) {
            $marca = $_REQUEST ['marca'];
            $componentes = $this->PublicModel->getComponentesPorMarca($marca);
            $this->view->renderComponentesPorMarca($marca, $componentes);
        }
    }
    
}