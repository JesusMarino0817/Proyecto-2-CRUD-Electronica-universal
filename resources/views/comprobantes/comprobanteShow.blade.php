@extends('layouts.app')

@section('contenido')


    <h1>Información del comprobante</h1>
    <a href="{{ route('comprobante.index') }}">Volver a lista </a>
    <br>

    <form action="{{ route('comprobante.edit', [$comprobante->id]) }}">
    <button type="submit">Editar</button>
    </form>
   <br> 

    <form action="{{ route('comprobante.destroy', [$comprobante]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Eliminar</button>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>
        <tr>
            <td>{{ $comprobante->id }}</td>
            <td>{{ $comprobante->categoria }}</td>
            <td>{{ $comprobante->monto }}</td>
            <td>{{ $comprobante->descripcion }}</td>
        </tr>
    </table>
    @endsection
