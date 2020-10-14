<?php

class AdminView
{

    private $titleAdministrador;
    private $titleAltaMarcaComponentes;
    private $titleEditMarca;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->titleAdministrador = "Silver Sea Studio | Administrador";
        $this->titleAltaMarcaComponentes = "Silver Sea Studio | Admin | Alta Marca o Componentes";
        $this->titleEditMarca = "Silver Sea Studio | Admin | Editar Marca";
        $this->titleEditComponente = "Silver Sea Studio | Admin | Editar Componente";
    }

    function ShowAdmin()
    {
        header("Location: " . BASE_URL . "administration");
    }

    function renderAdministrarBBDD($componentes, $marcas)
    {
        $this->smarty->assign('title', $this->titleAdministrador);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('./templates/admin.tpl');
    }

    function renderAltaMarcaComponentes($marcas)
    {
        $this->smarty->assign('title', $this->titleAltaMarcaComponentes);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('./templates/altaMarcaComponentes.tpl');
    }

    function renderEdicionMarca($marca)
    {
        $this->smarty->assign('title', $this->titleEditMarca);
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('./templates/adm_editMarca.tpl');
    }

    function renderEdicionComponente($componente)
    {
        $this->smarty->assign('title', $this->titleEditComponente);
        $this->smarty->assign('componente', $componente);
        $this->smarty->display('./templates/adm_editComponente.tpl');
    }
}
