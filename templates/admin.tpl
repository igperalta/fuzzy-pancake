{include file="header.tpl"}

<section class="marcas">
    <h1 class="servicestitle">ADMINISTRAR BBDD MARCAS</h1>

    <table>
        <thead>
            <tr>
                <th>ID marca</th>
                <th>Nombre</th>
                <th>Origen</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            {foreach from= $marcas item= marca}
                <tr>
                    <td>{$marca->id_marca}</td>
                    <td>{$marca->marca}</td>
                    <td>{$marca->origen}</td>
                    <td>
                        <div>
                            <form action="initEditarMarca" method="GET">
                                <button type="submit" name="id_marca" value="{$marca->id_marca}"> Editar </button>
                            </form>
                        </div>
    
                        <div>
                            <form action="deleteMarca" method="GET">
                                <button type="submit" name="id_marca" value="{$marca->id_marca}"> Eliminar </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>


<section class="componentes">
    <h1 class="servicestitle">ADMINISTRAR BBDD COMPONENTES</h1>

    <table>
        <thead>
            <tr>
                <th>ID componente</th>
                <th>ID marca</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Gama</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$componentes item=componente}
                <tr>
                    <td>{$componente->id_componente}</td>
                    <td>{$componente->id_marca}</td>
                    <td>{$componente->tipo}</td>
                    <td>{$componente->modelo}</td>
                    <td>{$componente->precio}</td>
                    <td>{$componente->gama}</td>
                    <td>
                        <div>
                            <form action="initEditarComponente" method="GET">
                                <button type="submit" name="id_componente" value="{$componente->id_componente}"> Editar </button>
                            </form>
                        </div>
    
                        <div>
                            <form action="deleteComponente" method="GET">
                                <button type="submit" name="id_componente" value="{$componente->id_componente}"> Eliminar </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>

{include file="footer.tpl"}