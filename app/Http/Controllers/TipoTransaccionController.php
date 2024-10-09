<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Transaccion;
use Illuminate\Http\Request;

class TipoTransaccionController extends Controller
{
    //
    public function index()
    {
      
        $tipoTransaccion = Tipo_Transaccion::all();
    
        return response()->json($tipoTransaccion);
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
      'TipoTransaccion'=>'required|max:100',
        ]);

        $tipoTransaccion = Tipo_Transaccion::create($request->all());

        return response()->json($tipoTransaccion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Transaccion  
     * @return \Illuminate\Http\Response
     */
    public function show($id) //si se pasa $id se utiliza la comentada
    {  
        $tipoTransaccion = Tipo_Transaccion::included()->findOrFail($id);
        return response()->json($tipoTransaccion);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Transaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Transaccion $tipoTransaccion)
    {
        $request->validate([
     'TipoTransaccion'=>'required|max:100',
        ]);

        $tipoTransaccion->update($request->all());

        return response()->json($tipoTransaccion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Transaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Transaccion $tipoTransaccion)
    {
        $tipoTransaccion->delete();
        return response()->json($tipoTransaccion);
    }
}

