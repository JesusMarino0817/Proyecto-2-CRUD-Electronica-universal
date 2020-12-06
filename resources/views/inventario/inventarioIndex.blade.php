<x-app-layout>
	<x-slot name="header">
	<h1 class="display-3">Inventario de productos.</h1>
    </x-slot>

    <hr class="sidebar-divider">
    <a class ="btn btn-primary" href="/inventario/create" role="button">Dar de alta nuevo producto.</a>
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
            @foreach ($inventario as $inv)
                <tr>
                    <td>{{ $inv->id }}</td>
                    <td><a href="/inventario/{{ $inv->id }}">{{ $inv->nombre }}</a></td>
                    <td>{{ $inv->categoria->categoria }}</td>
                    <td>{{ $inv->precio}}</td>
                    <td>{{ $inv->precio_cliente }}</td>
                    <td>{{ $inv->cantidad }}</td>
                    <td>{{ $inv->descripcion }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-x-app-layout>