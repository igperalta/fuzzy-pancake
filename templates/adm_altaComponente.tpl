{include file="header_a.tpl"}

<section class="formAltaComponente">
    <p class="servicestitle">ALTA DE NUEVO COMPONENTE</p>

    <form class="reserva" id="formReserva" method="POST" action="altaComponente">

        <span class="controlroomtitle">Tipo de componente</span>
        <input type="text" name="input-tipoComponente" placeholder="Tipo de componente" required>

        <span class="controlroomtitle">Modelo</span>
        <input type="text" name="input-modeloComponente" placeholder="Modelo" required>

        <span class="controlroomtitle">Precio en USD</span>
        <input type="number" name="input-precio" placeholder="U$D" required>

        <span class="controlroomtitle">Gama</span>
        <input type="text" name="input-gama" placeholder="Gama" required>

        <span class="controlroomtitle">Marca</span>
        <select name="input-idMarca">
            {foreach from=$marcas item=marca}
                <option value={$marca->id_marca}>{$marca->marca}</option>
            {/foreach}
        </select>

        <br>
        <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
    </form>
</section>

{include file="footer.tpl"}