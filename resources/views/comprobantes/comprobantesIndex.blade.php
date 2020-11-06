@extends('layouts.app')


@section('contenido')

<h1 class="display-3">Historial de ventas</h1>
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
			</tr> 

			@foreach ($comprobantes as $comprobante)
			<tr>
				<td>{{ $comprobante->id }}</td>
				<td><a href="/comprobante/{{ $comprobante->id }}">{{ $comprobante->categoria }}</a></td>
				<td>{{ $comprobante->descripcion }}</td>
				<td>{{ $comprobante->monto }}</td>
			</tr>
			@endforeach
        </table>
    </div>
		
@endsection
