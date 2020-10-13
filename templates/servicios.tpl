{include file="header.tpl"}

<section class="content">
    <section class="introServicios">
        <h1 class="serviciostitle">EL ESTUDIO</h1>
        <article>
            <div class="controlroom">
                <img class="imgControlRoom" src="css/images/controlroom.jpg" alt="Control Room">
                <p class="controlroomtext">
                    <span class="controlroomtitle">Control Room</span>
                    El estudio cuenta con un cómodo control room con vistas
                    al
                    exterior y a la sala de grabación. Amplio espacio, tanto
                    para los técnicos como para músicos y productores.
                    Nuestro
                    equipamiento permite la captura fiel, elección de
                    distintos "colores" y una excelente audición desde todos
                    los
                    ángulos, gracias al diseño de esta parte de la
                    sala.
                    También cuenta con una antesala, kitchenette, baño y
                    servicios que permiten una estancia cómoda y relajada.
                </p>
        </article>
        </div>
        <article>
            <div class="recordroom">
                <img class="imgGrabacion" src="css/images/saladegrabacion1.jpg" alt="Microfonos">
                <p class="salagrabaciontext">
                    <span class="salagrabaciontitle">Sala de Grabacion</span>
                    Sus dimensiones permiten una
                    aislación adecuada para realizar grabaciones solistas o
                    en
                    grupos de músicos que deseen tocar al mismo tiempo. Los
                    trabajos de acústica realizados le brindan un exacto
                    reflejo del sonido de origen, permitiendo de este modo
                    la
                    captura pura de la personalidad de cada ejecutante.
                    Espaciosa y equipada con instrumentos básicos, permite
                    el
                    trabajo de una amplia variedad de intérpretes y estilos.
                    Cuenta con aire acondicionado y soporte técnico para una
                    amplísima variedad de instrumentos.
                </p>
        </article>
        </div>
    </section>

    <!-- MUESTRO COMPONENTES -->
    <section class="componentes">
        <h1 class="serviciostitle">NUESTRO EQUIPAMIENTO</h1>

        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Modelo</th>
                </tr>
            </thead>
            <tbody>

                {foreach from=$componentes item=componente}
                <tr>
                    <td>{$componente->tipo}</td>
                    <td><a href='detalle?id={$componente->id_componente}'>{$componente->modelo}</a></td>
                </tr>
                {/foreach}
            </tbody>
        </table>

        <!-- MUESTRO MARCAS -->
        <section class="marcas">
            <h1 class="serviciostitle">MARCAS AMIGAS</h1>
            <ul>
                {foreach from=$marcas item=marca}
                <li class="controlroomtext"><a href='filtrar?nombre={$marca->marca}'>{$marca->marca}</a></li>
                {/foreach}

            </ul>
        </section>
{include file="footer.tpl"}
