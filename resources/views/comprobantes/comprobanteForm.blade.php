@extends('layouts.app')

@section('contenido')
		<h1>Crear Nueva Grabacion</h1>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

@if(isset($comprobante))
		<form action="{{ route('comprobante.update', [$comprobante]) }}" method="POST">
		@method('patch')
@else
		<form action="{{ route('comprobante.store') }}" method="POST">
@endif
			@csrf
			
            <label for="categoria">Categoria:</label>
            <select type="text" name="categoria" value="{{ old('categoria') ?? $comprobante->categoria ?? '' }}">
            <option value="0">...</option>
            <option value="venta">Venta</option>
            <option value="reparacion">Reparación</option>
            <option value="anticipo">Anticipo</option>
            </select>
            @error('categoria')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

            <label for="nombre_cliente">Nombre del cliente:</label>
			<input type="text" name="nombre_cliente" value="{{ old('nombre_cliente') ?? $comprobante->nombre_cliente ?? '' }}" ><br>
			@error('nombre_cliente')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

			<label for="fecha_entrega">Fecha de entrega:</label>
			<input type="date" name="fecha_entrega" value="{{ old('fecha') ?? $comprobante->fecha_entrega ?? '' }}"><br>
			@error('fecha_entrega')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

			<label for="celular_cliente">Celular del cliente:</label>
			<input type="bigInteger" name="celular_cliente" value="{{ old('celular_cliente') ?? $comprobante->celular_cliente ?? '' }}" ><br>
			@error('celular_cliente')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

			<label for="descripcion">Descripción:</label>
			<textarea name="descripcion">{{ old('descripcion') ?? $comprobante->descripcion ?? '' }}</textarea><br>
			
            <label for="monto">Monto:</label>
			<input type="bigInteger" name="monto" value="{{ old('monto') ?? $comprobante->monto ?? '' }}" ><br>
			@error('monto')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			
			<button type="submit">Enviar</button>
		</form>
@endsection