<?php
    require_once './libs/smarty/Smarty.class.php';

class PublicView {

    public function __construct() {
        $this->smarty = new Smarty();
        $this->titleHome = "Silver Sea Studio | Home";
        $this->titleServicios = "Silver Sea Studio | Servicios";
    }

    function renderHome() {
        $this->smarty->assign('title', $this->titleHome);
        $this->smarty->display('./templates/home.tpl');
    }

    function renderServicios($componentes, $marcas) {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        ///Cuando llamamos a variables que pasamos por parametro no se usa $this
        $this->smarty->display('./templates/servicios.tpl');

    }

    function renderComponenteByID($componente) {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('component', $componente);

        $this->smarty->display('./templates/componenteByID.tpl');
    }

    function renderComponentesPorMarca($marca, $componentes) {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $this->$componentes);
        $this->smarty->assign('marca', $this->$marca);

        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componentePorMarca.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function renderMarcaByNombre($marca) {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('marca', $marca);

        $this->smarty->display('./templates/marcaByNombre.tpl');
    }

    function renderError() {
        echo "<h2>¡Error!, marca no especificada</h2>";
    }
}