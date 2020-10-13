        <h1>Filtrar componentes por marca: {$marca->nombre}</h2>

        //imprime la tabla de componentes
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
        <a href='servicios'> Volver </a>