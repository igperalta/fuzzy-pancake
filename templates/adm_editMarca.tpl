{include file="header.tpl"}

<section class="formEdicionMarca">
    <p class="servicestitle">Editando marca: {$marca[0]->marca}</p>

    <form class="reserva" id="formReserva" method="POST" action="editMarca">

        <span class="spanReserva">Nombre</span>
        <input type="text" name="input-nombreMarca" placeholder="Nombre" value="{$marca[0]->marca}">

        <span class="spanReserva">Origen</span>
        <input type="text" name="input-origenMarca" placeholder="Origen" value="{$marca[0]->origen}">

        <br>
        <button type="submit" name="id_marca" value="{$marca[0]->id_marca}" id="js-confirmarButton" class="confirmarButton">Modificar</button>
    </form>

    <a href="administration">Volver</a>

</section>

{include file="footer.tpl"}