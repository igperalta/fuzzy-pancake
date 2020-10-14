<h1>Detalle de componente: {$component[0]->marca} {$component[0]->modelo}</h1>

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
                        <td>{$component[0]->tipo}</td>
                        <td>{$component[0]->marca}</td>
                        <td>{$component[0]->modelo}</td>
                        <td>{$component[0]->precio}</td>
                        <td>{$component[0]->gama}</td>
                    </tr>
                </tbody>
                </table>
        <a href="servicios">Volver</a>
{include file="footer.tpl"}
