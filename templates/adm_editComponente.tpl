{include file="header_a.tpl"}

<section class="formEdicionComponente">
    <p class="servicestitle">EDITAR COMPONENTE</p>

    <form class="reserva" id="formReserva" method="POST" action="editComponente">

        <span class="controlroomtitle">Tipo de componente</span>
        <input type="text" name="input-tipoComponente" placeholder="Tipo de componente" value="{$componente[0]->tipo}">

        <span class="controlroomtitle">Modelo</span>
        <input type="text" name="input-modeloComponente" placeholder="Modelo" value="{$componente[0]->modelo}">

        <span class="controlroomtitle">Precio en USD</span>
        <input type="number" name="input-precio" placeholder="U$D" value="{$componente[0]->precio}">

        <span class="controlroomtitle">Gama</span>
        <input type="text" name="input-gama" placeholder="Gama" value="{$componente[0]->gama}">

        <span class="controlroomtitle">Marca</span>
        <input type="number" name="input-idMarca" placeholder="ID Marca" value="{$componente[0]->id_marca}">
        {*Select con lista de marcas*}

        <br>
        <button type="submit" name="id_componente" value="{$componente[0]->id_componente}" id="js-confirmarButton" class="confirmarButton">Modificar</button>
    </form>
</section>

<a class="salagrabaciontitle" href="administrador">Volver</a>

{include file="footer.tpl"}