<h1 class="serviciostitle">Detalle de componente: {$component->marca} {$component->modelo}</h1>

<table>
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Gama</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{$component->tipo}</td>
            <td>{$component->marca}</td>
            <td>{$component->modelo}</td>
            <td>{$component->precio}</td>
            <td>{$component->gama}</td>
        </tr>
    </tbody>
</table>


<a class="salagrabaciontitle" href="servicios">Volver</a>
{include file="footer.tpl"}