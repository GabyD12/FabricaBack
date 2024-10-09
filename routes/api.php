<?php

use App\Http\Controllers\TipoTransaccionController;
use App\Models\Transaccion;
use App\Http\Controllers\TransaccionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('transacciones',TransaccionController::class);

Route::resource('tipoTransacciones',TipoTransaccionController::class);
