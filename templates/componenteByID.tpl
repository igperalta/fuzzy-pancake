<h1 class="serviciostitle">Detalle de componente: {$component->marca} {$component->modelo}</h1>

<table class="container">
    <thead class="col-12">
        <tr>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Gama</th>
        </tr>
    </thead>
    <tbody class="col-12">
        <tr>
            <td>{$component->tipo}</td>
            <td>{$component->marca}</td>
            <td>{$component->modelo}</td>
            <td>{$component->precio}</td>
            <td>{$component->gama}</td>
        </tr>
    </tbody>
</table>

{include file="comments.tpl"}

<a class="salagrabaciontitle" href="servicios">Volver</a>
{include file="footer.tpl"}