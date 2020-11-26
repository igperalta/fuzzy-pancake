        <h1 class="serviciostitle">Filtrar componentes por marca: {$marca->marca}</h1>

        {*imprime la tabla de componentes*}
        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Gama</th>
                </tr>
            </thead>
            <tbody>

                {foreach from=$componentes item=componente}
                <tr>
                    <td>{$componente->tipo}</td>
                    <td>{$componente->modelo}</td>
                    <td>{$componente->precio}</td>
                    <td>{$componente->gama}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        <a class="salagrabaciontitle" href='servicios'>Volver</a>