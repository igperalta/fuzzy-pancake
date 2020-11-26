<h1 class="serviciostitle">Detalle de marca: {$marca->marca}</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Origen</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{$marca->marca}</td>
            <td>{$marca->origen}</td>
        </tr>
    </tbody>
</table>
<a class="salagrabaciontitle" href="servicios">Volver</a>
{include file="footer.tpl"}