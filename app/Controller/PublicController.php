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
    
    /*function showComponentesPorMarca() {

        //verifica datos obligatorios
        if (!isset($_GET['marca']) || empty($_GET['marca'])) {
            $this->view->renderError();
            die();
        }

        //obtiente la marca enviada por GET
        $marca = $_GET['marca'];

        //obtendo los componentes por marca
        $componentes = $this->model->getComponentesPorMarca($marca);

        //actualizo la vista
        $this->view->renderComponentesPorMarca($marca, $componentes);
    }*/

    /*function showComponentes() {
        //mostrar unicamente on load 

        //llamo al modelo para obtener todos los componentes
        $componentes = $this->model->getComponentes();

        //actualizo la vista
        $this->view->renderComponentes($componentes);
    }*/

    /*function showMarcas() {
        //mostrar unicamente on load 

        //llamo al modelo para obtener todos los componentes
        $marcas = $this->model->getMarcas();

        //actualizo la vista
        $this->view->renderMarcas($marcas);
    }*/
    
}