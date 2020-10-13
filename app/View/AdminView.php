<?php

class AdminView {

    private $titleAdministrador;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->titleAdministrador = "Silver Sea Studio | Administrador";
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

        $html = '
                <section class="formAltaMarca">
                <p class="servicestitle">ALTA DE NUEVA MARCA</p>

                <form class="reserva" id="formReserva" method="POST" action="altaMarca">

                <span class="spanReserva">Nombre</span>
                <input type="text" name="input-nombreMarca" placeholder="Nombre" required>

                <span class="spanReserva">Origen</span>
                <input type="text" name="input-origenMarca" placeholder="Origen" required>

                <br> 
                <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
                </form>



                <section class="formAltaComponente">
                <p class="servicestitle">ALTA DE NUEVO COMPONENTE</p>

                <form class="reserva" id="formReserva" method="POST" action="altaComponente">

                <span class="spanReserva">Tipo de componente</span>
                <input type="text" name="input-tipoComponente" placeholder="Tipo de componente" required>

                <span class="spanReserva">Modelo</span>
                <input type="text" name="input-modeloComponente" placeholder="Modelo" required>

                <span class="spanReserva">Precio en USD</span>
                <input type="number" name="input-precio" placeholder="U$D" required>

                <span class="spanReserva">Gama</span>
                <input type="text" name="input-gama" placeholder="Gama" required>

                <span class="spanReserva">Marca</span>
                <select name="input-idMarca">';

                foreach($marcas as $marca){
                    $html .= 
                    '<option value="'.$marca->id_marca.'">'.$marca->marca.'</option>';
                }

                $html .= '
                </select>

                <br> 
                <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
                </form>

        
        <footer>
            <section class="socialmedia">
                <ul class="socialbuttons">
                    <li><a href="https://www.instagram.com"><img
                                src="css/icons/icoinstagram.png"></a></li>
                    <li><a href="https://twitter.com"><img
                                src="css/icons/icotwitter.png"></a></li>
                    <li><a href="https://mail.google.com"><img
                                src="css/icons/icomail.png"></a></li>
                    <li><a href="https://goo.gl/maps/xQvyUaujGipUyeu66"><img
                                src="css/icons/icolocation.png"></a></li>
                </ul>
            </section>
            <span class="copyright">Orellano &amp; Peralta 2020 &copy; todos
                los derechos reservados</span>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        </body>
        </html>
        ';
        
        echo $html;
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

    function renderEdicionMarca($marca) {
        $html = '
        <section class="formEdicionMarca">
        <p class="servicestitle">EDITAR MARCA</p>

        <form class="reserva" id="formReserva" method="POST" action="editMarca/'.$marca->id_marca.'">

        <span class="spanReserva">Nombre</span>
        <input type="text" name="input-nombreMarca" placeholder="Nombre" value="'.$marca->nombre.'">

        <span class="spanReserva">Origen</span>
        <input type="text" name="input-origenMarca" placeholder="Origen" value="'.$marca->origen.'">

        <br> 
        <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Modificar</button>
        </form>

        <a href="administrador">Volver</a>
        ';

        echo $html;
    }

}