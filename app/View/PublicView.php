<?php
require_once './libs/smarty/Smarty.class.php';
require_once './app/Helper/AuthHelper.php';

class PublicView
{
    private $auth_helper;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->auth_helper = new AuthHelper();
        $this->titleHome = "Silver Sea Studio | Home";
        $this->titleServicios = "Silver Sea Studio | Servicios";
        $this->titleLogin = "Silver Sea Studio | Login";
    }

    function renderHome()
    {
        $this->smarty->assign('title', $this->titleHome);
        if ($this->auth_helper->VerifySession())
            $this->smarty->display('./templates/header_a.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/home.tpl');
    }

    function renderLogin($message = "")
    {
        $this->smarty->assign('title', $this->titleLogin);
        $this->smarty->assign('message', $message);
        $this->smarty->display('./templates/login.tpl');
    }

    function renderServicios($componentes, $marcas)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        if ($this->auth_helper->VerifySession())
            $this->smarty->display('./templates/header_a.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        ///Cuando llamamos a variables que pasamos por parametro no se usa $this
        $this->smarty->display('./templates/servicios.tpl');
    }

    function renderComponenteByID($componente)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('component', $componente);
        if ($this->auth_helper->VerifySession())
            $this->smarty->display('./templates/header_a.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componenteByID.tpl');
    }

    function renderComponentesPorMarca($marca, $componentes)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $this->$componentes);
        $this->smarty->assign('marca', $this->$marca);
        if ($this->auth_helper->VerifySession())
            $this->smarty->display('./templates/header_a.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componentePorMarca.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function renderMarcaByNombre($marca)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('marca', $marca);
        if ($this->auth_helper->VerifySession())
            $this->smarty->display('./templates/header_a.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/marcaByNombre.tpl');
    }

    function renderError()
    {
        echo "<h2>¡Error!, marca no especificada</h2>";
    }
}
