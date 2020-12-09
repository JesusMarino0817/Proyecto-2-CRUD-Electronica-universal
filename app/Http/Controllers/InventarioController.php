<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Refaccion;
use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\EsMayor;

class InventarioController extends Controller
{
    public function __construct(){
       
        $this->middleware('es-mayor');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = Inventario::get();
        
        return view('/inventario/inventarioIndex', compact('inventario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $refaccions = Refaccion::all();
        return view('/inventario/inventarioForm', compact('categorias', 'refaccions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:20',
            'categoria_id' => 'required',
            'precio' => 'required|numeric',
            'precio_cliente' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);
        $request->merge([
            'descripcion' => $request->descripcion ?? '']);

        $inventario = new Inventario();
        $inventario->nombre = $request->nombre;   
        $inventario->categoria_id = $request->categoria_id;
        $inventario->precio = $request->precio;
        $inventario->precio_cliente = $request->precio_cliente;
        $inventario->cantidad = $request->cantidad;
        $inventario->descripcion = $request->descripcion;
        $inventario->save();
        
        $inventario->refaccions()->attach($request->refaccion_id);

        //Inventario::create($request->all());
        return redirect('/inventario')
        ->with([
            'mensaje' => 'El articulo ha sido agregado con éxito del inventario',
            'alert-type' => 'alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        return view('/inventario/inventarioShow', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        $categorias = Categoria::all();
        $refaccions = Refaccion::all();
        return view('/inventario/inventarioForm', compact('inventario', 'categorias','refaccions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:20',
            'categoria_id' => 'required',
            'precio' => 'required|numeric',
            'precio_cliente' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);
        $request->merge([
            'descripcion' => $request->descripcion ?? '']);
        Inventario::where('id', $inventario->id)->update($request->except('_method','_token','refaccion_id'));

        $inventario->refaccions()->sync($request->refaccion_id);

        return redirect()->route('inventario.index')
        ->with([
            'mensaje' => 'El articulo ha sido actualizado con éxito del inventario',
            'alert-type' => 'alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index')->with([
            'mensaje' => 'El articulo ha sido eliminado del inventario!',
            'alert-type' => 'alert-danger',
        ]);
    }
}
