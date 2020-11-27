<?php

class AdminView
{

    private $titleAdministrador;
    private $titleInsertBrand;
    private $titleInsertComponent;
    private $titleUpdateBrand;
    private $titleUpdateComponent;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->titleAdministrador = "Silver Sea Studio | Administrador";
        $this->titleInsertBrand = "Silver Sea Studio | Admin | Alta Marca";
        $this->titleInsertComponent = "Silver Sea Studio | Admin | Alta Componente";
        $this->titleUpdateBrand = "Silver Sea Studio | Admin | Editar Marca";
        $this->titleUpdateComponent = "Silver Sea Studio | Admin | Editar Componente";
    }

    function ShowAdmin()
    {
        header("Location: " . BASE_URL . "administration");
    }

    function renderAdministrarBBDD($componentes, $marcas, $users)
    {
        $this->smarty->assign('title', $this->titleAdministrador);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('users', $users);
        $this->smarty->display('./templates/admin.tpl');
    }

    function renderInsertBrand()
    {
        $this->smarty->assign('title', $this->titleInsertBrand);
        $this->smarty->display('./templates/adm_altaMarca.tpl');
    }
    
    function renderInsertComponent($brands)
    {
        $this->smarty->assign('title', $this->titleInsertComponent);
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('./templates/adm_altaComponente.tpl');
    }

    function renderEdicionMarca($marca)
    {
        $this->smarty->assign('title', $this->titleUpdateBrand);
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('./templates/adm_editMarca.tpl');
    }

    function renderEdicionComponente($componente)
    {
        $this->smarty->assign('title', $this->titleUpdateComponent);
        $this->smarty->assign('componente', $componente);
        $this->smarty->display('./templates/adm_editComponente.tpl');
    }
}
