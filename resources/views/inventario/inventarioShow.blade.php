<x-app-layout>
	<x-slot name="header">
	<h1 class="display-3">Información del producto.</h1>
    </x-slot>

    <hr class="sidebar-divider">
    <a class="btn btn-primary" role="button" href="{{ route('inventario.edit', [$inventario->id]) }}">Editar información del producto.</a>
    <a class="btn btn-primary" role="button" href="{{ route('inventario.index') }}">Regresar a la lista</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Precio para clientes</th>
                <th>Cantidad disponible</th>
                <th>Descripción</th>
            </tr>
                <tr>
                    <td>{{ $inventario->id }}</td>
                    <td>{{ $inventario->nombre }}</td>
                    <td>{{ $inventario->categoria->categoria }}</td>
                    <td>{{ $inventario->precio}}</td>
                    <td>{{ $inventario->precio_cliente }}</td>
                    <td>{{ $inventario->cantidad }}</td>
                    <td>{{ $inventario->descripcion }}</td>
                </tr>
        </table>
        <form action="{{ route('inventario.destroy',[$inventario]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Eliminar producto</button>
        </form>
    </div>
</x-x-app-layout>