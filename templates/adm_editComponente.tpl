{include file="header_a.tpl"}

<section class="formEdicionComponente">
    <p class="servicestitle">EDITAR COMPONENTE</p>

    <form class="reserva" id="formReserva" method="POST" action="editComponente">

        <span class="spanReserva">Tipo de componente</span>
        <input type="text" name="input-tipoComponente" placeholder="Tipo de componente" value="{$componente[0]->tipo}">

        <span class="spanReserva">Modelo</span>
        <input type="text" name="input-modeloComponente" placeholder="Modelo" value="{$componente[0]->modelo}">

        <span class="spanReserva">Precio en USD</span>
        <input type="number" name="input-precio" placeholder="U$D" value="{$componente[0]->precio}">

        <span class="spanReserva">Gama</span>
        <input type="text" name="input-gama" placeholder="Gama" value="{$componente[0]->gama}">

        <span class="spanReserva">Marca</span>
        <input type="number" name="input-idMarca" placeholder="ID Marca" value="{$componente[0]->id_marca}">
        {*Select con lista de marcas*}

        <br>
        <button type="submit" name="id_componente" value="{$componente[0]->id_componente}" id="js-confirmarButton" class="confirmarButton">Modificar</button>
    </form>
</section>

<a href="administrador">Volver</a>

{include file="footer.tpl"}