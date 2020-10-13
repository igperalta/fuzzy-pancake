{include file="header.tpl"}



<section class="componentes">
    <h1 class="servicestitle">ADMINISTRAR BBDD EQUIPAMIENTO</h1>

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
                            <a class="edit" href="editComponente/{$componente->id_componente}">Editar</a>
                        </div>
    
                        <div>
                            <a class="delete" href="deleteComponente/{$componente->id_componente}">Eliminar</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>



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
                                <a class="edit" href='.editMarca/$marca->id_marca.'>Editar</a>
                            </div>
    
                            <div>
                                <a class="delete" href='.deleteMarca/$marca->id_marca.'>Eliminar</a>
                            </div>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>

        {*FALTA BOTON DE LOGOUT, YA ESTA ENRUTADO Y LA FUNCION HECHA*}

        {include file="footer.tpl"}