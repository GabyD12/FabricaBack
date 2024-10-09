<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
       //
       public function index()
       {
      //    $transaccion=Transaccion::all();
         $transaccion = Transaccion::included()->get();
       
           return response()->json($transaccion);
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
            'Motivo'=>'required|max:100',
            'fecha'=>'required|max:100',
            'Monto'=>'required|max:100',
           ]);
   
           $transaccion = Transaccion::create($request->all());
   
           return response()->json($transaccion);
       }
   
       /**
        * Display the specified resource.
        *
        * @param  \App\Models\Tipo_Transaccion  
        * @return \Illuminate\Http\Response
        */
       public function show($id) //si se pasa $id se utiliza la comentada
       {  
           $transaccion = Transaccion::included()->findOrFail($id);
           return response()->json($transaccion);
   
   
       }
   
       /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Models\Transaccion
        * @return \Illuminate\Http\Response
        */
       public function update(Request $request, Transaccion $transaccion)
       {
           $request->validate([
            'Motivo'=>'required|max:100',
            'fecha'=>'required|max:100',
            'Monto'=>'required|max:100',
            'id_tipo_transaccion'=>'required|max:100'
        
           ]);
   
           $transaccion->update($request->all());
   
           return response()->json($transaccion);
       }
   
       /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Models\Transaccion
        * @return \Illuminate\Http\Response
        */
       public function destroy(Transaccion $transaccion)
       {
           $transaccion->delete();
           return response()->json($transaccion);
       }
   }
   

