@extends('layouts.app')

@section('contenido')
<h1 class="display-3">Información del comprobante</h1>
    <hr class="sidebar-divider">
    <a class="btn btn-primary" role="button" href="{{ route('comprobante.edit', [$comprobante->id]) }}">Editar información del comprobante</a>
    <a class="btn btn-primary" role="button" href="{{ route('comprobante.index') }}">Regresar al historial de comprobantes</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Nombre del cliente</th>
                <th>Fecha de entrega</th>
                <th>Celular del cliente</th>
                <th>Descripción</th>
                <th>Monto</th>
            </tr>
                <tr>
                    <td>{{ $comprobante->id }}</td>
                    <td>{{ $comprobante->categoria }}</td>
                    <td>{{ $comprobante->nombre_cliente }}</td>
                    <td>{{ $comprobante->fecha_entrega}}</td>
                    <td>{{ $comprobante->celular_cliente }}</td>
                    <td>{{ $comprobante->descripcion }}</td>
                    <td>{{ $comprobante->monto }}</td>
                </tr>
        </table>
        <form action="{{ route('comprobante.destroy',[$comprobante]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Eliminar Comprobante</button>
        </form>
    </div>

    @endsection

    