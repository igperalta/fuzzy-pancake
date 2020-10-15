{include file="header_a.tpl"}

<section class="formAltaMarca">
    <p class="servicestitle">ALTA DE NUEVA MARCA</p>

    <form class="reserva" id="formReserva" method="POST" action="altaMarca">

        <span class="controlroomtitle">Nombre</span>
        <input type="text" name="input-nombreMarca" placeholder="Nombre" required>

        <span class="controlroomtitle">Origen</span>
        <input type="text" name="input-origenMarca" placeholder="Origen" required>

        <br>
        <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
    </form>
</section>

{include file="footer.tpl"}