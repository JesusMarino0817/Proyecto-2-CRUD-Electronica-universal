<x-app-layout>
	<x-slot name="header">
	<h1 class="display-3">Formulario</h1>
    </x-slot>
    

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Información del producto.</h1>
    <hr class="sidebar-divider">
    @if(isset($inventario))
        <form action="{{ route('inventario.update',[$inventario])}}" method="POST">
            @method('patch')
    @else
        <form action="{{ route('inventario.store')}}" method="POST">
    @endif
        @csrf
        <div class="form-group">
            <label for="nombre" class="col-lg-3">Nombre del producto:</label>
            <input type="text" name="nombre" pattern="[\w\s-]{5,20}"  required value="{{ old('nombre') ?? $inventario->nombre ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group text-">
            <label for="categoria" class="col-lg-3">Categoria: </label>
            <select name="categoria_id" style="width: 400px; heigth: 15px" required>
                @foreach ($categorias as $categoria)
                <!--<option value="{{ $categoria->id }}">{{ $categoria->categoria }} </option>-->
                <option value="{{ $categoria->id }}" {{ isset($inventario->categoria->categoria) && $inventario->categoria->categoria == $categoria->categoria ? 'selected' : ''}}>{{ $categoria->categoria }}</option>
                
                @endforeach
                
                <!--<option value="sonido" {{ old('categoria') == 'sonido' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'sonido' ? 'selected' : ''}}>Sonido</option>
                <option value="accesorios" {{ old('categoria') == 'accesorios' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'accesorios' ? 'selected' : ''}}>Accesorios para celular</option>
                <option value="otros" {{ old('categoria') == 'otros' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'otros' ? 'selected' : ''}}>Otros</option> -->
            </select><br>
        </div>
        <div class="form-group">
            <label for="precio" class="col-lg-3">Precio: </label>
            <input type="number" name="precio" pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" required value="{{ old('precio') ?? $inventario->precio ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group">
            <label for="precio_cliente" class="col-lg-3">Precio para cliente: </label>
            <input type="number" name="precio_cliente" pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" value="{{ old('precio_cliente') ?? $inventario->precio_cliente ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group">
            <label for="cantidad" class="col-lg-3">Cantidad: </label>
            <input type="number" name="cantidad" id="cantidad" value="{{ old('cantidad') ?? $inventario->cantidad ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <script>
            var input=  document.getElementById('cantidad');
            input.addEventListener('input',function(){
            if (this.value.length > 3) 
                this.value = this.value.slice(1,3); 
            })
        </script>
        <div class="form-group">
            <label for="descripcion" class="col-lg-3">Descripcion del producto: </label>
            <textarea required name="descripcion"cols="47" rows="10">{{ old('descripcion') ?? $inventario->descripcion ?? ''}}</textarea><br>
        </div>

        <label for="refaccion" class="col-lg-3">Refaccion: </label>
        <select name="refaccion_id[]" style="width: 400px; heigth: 15px" multiple >
                @foreach ($refaccions as $refaccion)
                
                <option value="{{ $refaccion->id }}" {{ isset($refaccion) && $refaccion->nombre == $refaccion->nombre ? 'selected' : ''}}>{{ $refaccion->nombre }}</option>
               

                @endforeach
                
        </select><br>
    

        <button type="submit" class="btn btn-primary col-3">Enviar</button>
        <br>
    </form>
</x-x-app-layout>