<?php

class AdminView {

    private $titleAdministrador;
    private $titleAltaMarcaComponentes;
    private $titleEditMarca;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->titleAdministrador = "Silver Sea Studio | Administrador";
        $this->titleAltaMarcaComponentes = "Silver Sea Studio | Admin | Alta Marca o Componentes";
        $this->titleEditMarca = "Silver Sea Studio | Admin | Editar Marca";
    }

    function ShowAdmin(){
        header("Location: ".BASE_URL."administration");
    }
      
    function renderAdministrarBBDD($componentes, $marcas) {
        $this->smarty->assign('title', $this->titleAdministrador);
        $this->smarty->assign('componentes', $componentes);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('./templates/admin.tpl');
    }
    
    function renderAltaMarcaComponentes($marcas) {
        $this->smarty->assign('title', $this->titleAltaMarcaComponentes);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('./templates/altaMarcaComponentes.tpl');
    }
    
    function renderEdicionMarca($marca) {
       $this->smarty->assign('title', $this->titleEditMarca);
       $this->smarty->assign('marca', $marca);
       $this->smarty->display('./templates/adm_editMarca.tpl');
    }


    function renderEdicionComponente($componente) {
        $html = '
        <section class="formEdicionComponente">
        <p class="servicestitle">EDITAR COMPONENTE</p>

        <form class="reserva" id="formReserva" method="POST" action="editComponente/'.$componente->id_componente.'" >

        <span class="spanReserva">Tipo de componente</span>
        <input type="text" name="input-tipoComponente" placeholder="Tipo de componente" value="'.$componente->tipo.'">

        <span class="spanReserva">Modelo</span>
        <input type="text" name="input-modeloComponente" placeholder="Modelo" value="'.$componente->modelo.'">

        <span class="spanReserva">Precio en USD</span>
        <input type="number" name="input-precio" placeholder="U$D" value="'.$componente->precio.'">

        <span class="spanReserva">Gama</span>
        <input type="text" name="input-gama" placeholder="Gama" value="'.$componente->gama.'">

        <span class="spanReserva">Marca</span>
        <input type="number" name="input-idMarca" placeholder="ID Marca" value="'.$componente->id_marca.'">

        <br> 
        <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Modificar</button>
        </form>

        <a href="administrador">Volver</a>
        ';

        echo $html;
    }


}