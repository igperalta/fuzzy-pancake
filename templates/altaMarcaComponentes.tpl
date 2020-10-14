{include file="header.tpl"}

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
            <select name="input-idMarca">
                {foreach($marcas as $marca)}
                    <option value={$marca->id_marca}>{$marca->marca}</option>
                {/foreach}
            </select>

            <br>
            <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
        </form>
    </section>
    
    {include file="footer.tpl"}