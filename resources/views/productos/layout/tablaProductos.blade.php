<div class="row">
    <div class="col">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Marca</th>
                <th>Descripcion</th>
                <th>Precio Compra Q</th>
                <th>Precio Venta Q</th>
                <th>Existencia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->producto }}</td>
                        <td>{{ $producto->marca->marca }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio_costo }}</td>
                        <td>{{ $producto->precio_venta }}</td>
                        <td>{{ $producto->existencia }}</td>
                        <td>
                            <a href="/editar/{{ $producto->id }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/eliminar/{{ $producto->id }}" class="btn btn-danger">
                                <i class="fas fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
