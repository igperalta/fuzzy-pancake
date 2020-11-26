<?php
require_once './libs/smarty/Smarty.class.php';
require_once 'app/Helper/AuthHelper.php';

class PublicView
{
    private $authHelper;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
        $this->titleHome = "Silver Sea Studio | Home";
        $this->titleServicios = "Silver Sea Studio | Servicios";
        $this->titleLogin = "Silver Sea Studio | Login";
        $this->titleRegistration = "Silver Sea Studio | Registro de Usuario";
    }


    function renderHome()
    {
        $this->smarty->assign('title', $this->titleHome);
        if ($this->authHelper->isAdmin())
            $this->smarty->display('./templates/header_a.tpl');
        else if ($this->authHelper->isUser())
            $this->smarty->display('./templates/header_u.tpl');
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


    function renderRegistration($message = "")
    {
        $this->smarty->assign('title', $this->titleRegistration);
        $this->smarty->assign('message', $message);
        $this->smarty->display('./templates/register.tpl');
    }

    function renderServicios($componentes, $marcas)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        if ($this->authHelper->isAdmin())
            $this->smarty->display('./templates/header_a.tpl');
        else if ($this->authHelper->isUser())
            $this->smarty->display('./templates/header_u.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/servicios.tpl');
    }

    function renderComponenteByID($componente)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('component', $componente);
        if ($this->authHelper->isAdmin())
            $this->smarty->display('./templates/header_a.tpl');
        else if ($this->authHelper->isUser())
            $this->smarty->display('./templates/header_u.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componenteByID.tpl');
    }

    function renderComponentesPorMarca($marca, $componentes)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marca', $marca);
        if ($this->authHelper->isAdmin())
            $this->smarty->display('./templates/header_a.tpl');
        else if ($this->authHelper->isUser())
            $this->smarty->display('./templates/header_u.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/componentePorMarca.tpl');
        $this->smarty->display('./templates/footer.tpl');
    }

    function renderMarcaByNombre($marca)
    {
        $this->smarty->assign('title', $this->titleServicios);
        $this->smarty->assign('marca', $marca);
        if ($this->authHelper->isAdmin())
            $this->smarty->display('./templates/header_a.tpl');
        else if ($this->authHelper->isUser())
            $this->smarty->display('./templates/header_u.tpl');
        else
            $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/marcaByNombre.tpl');
    }

    function renderError()
    {
        echo "<h2>¡Error!, marca no especificada</h2>";
    }
}
