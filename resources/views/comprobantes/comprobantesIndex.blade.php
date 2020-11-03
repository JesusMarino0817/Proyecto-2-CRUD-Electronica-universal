@extends('layouts.app')


@section('contenido')

		<h1>Lista de comprobantes</h1>
		
		 <form action="{{ route('comprobante.create') }}">
   		 <button type="submit">Crear Comprobante</button>
   		 </form>
			<br>

		<table border="2">
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
@endsection