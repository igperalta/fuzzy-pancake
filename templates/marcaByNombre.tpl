
<h1>Detalle de marca: {$marca[0]->marca}</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Origen</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{$marca[0]->marca}</td>
            <td>{$marca[0]->origen}</td>
        </tr>
    </tbody>
</table>
<a href="servicios">Volver</a>
{include file="footer.tpl"}