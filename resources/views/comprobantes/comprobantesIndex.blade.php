<x-app-layout>
	<x-slot name="header">
	<h1 class="display-3">Historial de ventas</h1>
    </x-slot>


    <hr class="sidebar-divider">
    <a class ="btn btn-primary" href="/comprobante/create" role="button">Crear nuevo comprobante</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
		<tr>
				<th>ID</th>
				<th>Categoria</th>
                <th>Descripcion</th>
                <th>Monto</th>
				<th>Fecha de entrega</th>
			</tr> 

			@foreach ($comprobantes as $comprobante)
			<tr>
				<td>{{ $comprobante->id }}</td>
				<td><a href="/comprobante/{{ $comprobante->id }}">{{ $comprobante->categoria }}</a></td>
				<td>{{ $comprobante->descripcion }}</td>
				<td>{{ $comprobante->monto }}</td>
				<td>{{ fecha_formato($comprobante->fecha_entrega)}}</td>
			</tr>
			@endforeach
        </table>
    </div>
</x-x-app-layout>