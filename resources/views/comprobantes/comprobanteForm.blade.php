<x-app-layout>
	<x-slot name="header">
	<h1 class="display-3">Crear Comprobante</h1>
    </x-slot>
		
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<hr class="sidebar-divider">
@if(isset($comprobante))
		<form action="{{ route('comprobante.update', [$comprobante]) }}" method="POST">
		@method('patch')
@else
		<form action="{{ route('comprobante.store') }}" method="POST">
@endif
			@csrf
			
			<div class="form-group">
            <label for="categoria"  class="col-lg-2">Categoria:</label>
            <select type="text" required name="categoria" value="{{ old('categoria') ?? $comprobante->categoria ?? '' }}" style="width: 400px; heigth: 15px">
            <option value="venta" {{ old('categoria') == 'venta' ? 'selected' : '' }}{{ isset($comprobante) && $comprobante->categoria == 'venta' ? 'selected' : ''}}>Venta</option>
            <option value="reparacion" {{ old('reparacion') == 'reparacion' ? 'selected' : '' }}{{ isset($comprobante) && $comprobante->categoria == 'reparacion' ? 'selected' : ''}}>Reparación</option>
            <option value="anticipo"  {{ old('anticipo') == 'anticipo' ? 'selected' : '' }}{{ isset($comprobante) && $comprobante->categoria == 'anticipo' ? 'selected' : ''}} >Anticipo</option>
            </select><br>
			</div>
            @error('categoria')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror

			<div class="form-group">
            <label for="nombre_cliente" class="col-lg-2">Nombre del cliente:</label>
			<input type="text" name="nombre_cliente" required pattern="[\w\s]{5,35}" value="{{ old('nombre_cliente') ?? $comprobante->nombre_cliente ?? '' }}" style="width: 400px; heigth: 15px" ><br>
			@error('nombre_cliente')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			</div>

			<div class="form-group">
			<label for="fecha_entrega" class="col-lg-2">Fecha de entrega:</label>
			<input type="date" name="fecha_entrega" required value="{{ old('fecha') ?? $comprobante->fecha_entrega ?? '' }}"><br>
			@error('fecha_entrega')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			</div>

			<div class="form-group">
			<label for="celular_cliente"  class="col-lg-2">Celular del cliente:</label>
			<input type="bigInteger" name="celular_cliente" required pattern="^[0-9]{10}" value="{{ old('celular_cliente') ?? $comprobante->celular_cliente ?? '' }}" style="width: 400px; heigth: 15px" ><br>
			@error('celular_cliente')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			</div>

			<div class="form-group">
			<label for="descripcion" class="col-lg-2">Descripción:</label>
			<textarea name="descripcion" >{{ old('descripcion') ?? $comprobante->descripcion ?? '' }} </textarea><br>
			</div>

			<div class="form-group">
            <label for="monto"class="col-lg-2">Monto:</label>
			<input type="bigInteger" name="monto" pattern="^[0-9]{1,6}" required value="{{ old('monto') ?? $comprobante->monto ?? '' }}" style="width: 400px; heigth: 15px" ><br>
			@error('monto')
    			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			</div>

			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
</x-app-layout>