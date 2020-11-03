<?php

namespace App\Http\Controllers;

use App\Models\Comprobante;
use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobantes = Comprobante::get();
        return view('comprobantes/comprobantesIndex', compact('comprobantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comprobantes/comprobanteForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibir datos
        //Valido datos
        
        $request->validate([
            'categoria' => 'required',
            'nombre_cliente' => 'min:5|max:255',
            'fecha_entrega' => ['date'],
            'celular_cliente' => 'numeric',
            'monto' => 'required|numeric',
        ]);
        
        //Guardar a DB
        $request->merge(['descripcion' => $request->descripcion ?? ''
        ]);

        Comprobante::create($request->all());
    
        // Redireccion
        return redirect('/comprobante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function show(Comprobante $comprobante)
    {
        return view('comprobantes.comprobanteShow', compact('comprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprobante $comprobante)
    {
        return view('comprobantes.comprobanteForm', compact('comprobante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprobante $comprobante)
    {
        $request->validate([
            'categoria' => 'required',
            'nombre_cliente' => 'min:5|max:255',
            'fecha_entrega' => ['date'],
            'celular_cliente' => 'numeric',
            'monto' => 'required|numeric',
        ]);
        
        Comprobante::where('id', $comprobante->id)->update($request->except('_method', '_token'));
        
        return redirect()->route('comprobante.show', [$comprobante]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprobante $comprobante)
    {
        $comprobante->delete();
        return redirect()->route('comprobante.index');
    }
}
