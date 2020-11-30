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

<div class="d-flex justify-content-center align-items-end mt-3 mb-3">
    <a role="button" class="btn btn-dark btn-lg" href="servicios">Volver</a>
</div>

{include file="footer.tpl"}