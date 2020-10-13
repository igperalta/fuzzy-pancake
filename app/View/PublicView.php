<?php
    require_once './libs/smarty/Smarty.class.php';

class PublicView {

    public function __construct() {
        $this->smarty = new Smarty();
        $this->titleHome = "Silver Sea Studio | Home";
        $this->titleServicios = "Silver Sea Studio | Servicios";
    }

    function renderHome() {
        $this->smarty->assign('titulo', $this->titleHome);
        $this->smarty->display('./templates/home.tpl');
    }

    function renderServicios($componentes, $marcas) {
        $this->smarty->assign('titulo', $this->titleServicios);
        $this->smarty->assign('componentes', $this->$componentes);
        $this->smarty->assign('marcas', $this->$marcas);

        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/servicios.tpl');
        $this->smarty->display('./templates/footer.tpl');

    }

    function renderComponenteByID($componente) {
        $this->smarty->assign('titulo', $this->titleServicios);
        $this->smarty->assign('componente', $this->$componente);

        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componenteByID.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function renderComponentesPorMarca($marca, $componentes) {
        $this->smarty->assign('titulo', $this->titleServicios);
        $this->smarty->assign('componentes', $this->$componentes);
        $this->smarty->assign('marca', $this->$marca);

        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componentePorMarca.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function renderMarcaByNombre($marca) {
        $this->smarty->assign('titulo', $this->titleServicios);
        $this->smarty->assign('marca', $this->$marca);

        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/marcaByNombre.tpl');
        $this->smarty->display('./templates/footer.tpl');
        
    }

    function renderError() {
        echo "<h2>¡Error!, marca no especificada</h2>";
    }
}