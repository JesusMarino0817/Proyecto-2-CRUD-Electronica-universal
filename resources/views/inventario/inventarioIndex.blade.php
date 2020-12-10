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
                <th>Ganancia por producto</th>

                
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
                    <td>{{ $inv->ganancia_por_producto }}</td>

                </tr>
            @endforeach
        </table>
        </div>
        <br>
        <br>
        <div>
        <table class="table table-striped">
            <tr>
                <th>Nombre del producto</th>
                <th>Tipo de refaccion que utiliza</th>
                <th>Nombre de la pieza</th>
                <th>PIezas disponibles</th>

            </tr>
            @foreach ($inventario as $inv)
            <tr>
                    <td><a href="/inventario/{{ $inv->id }}">{{ $inv->nombre }}</a></td>
                    <td>
                        @foreach ($inv->refaccions as $refaccion)
                           {{ $refaccion->tipo}} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($inv->refaccions as $refaccion)
                           {{ $refaccion->nombre}} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($inv->refaccions as $refaccion)
                           {{ $refaccion->cantidad}} <br>
                        @endforeach
                    </td>
            </tr>
            @endforeach
        </table>
        </div>
    
</x-x-app-layout>