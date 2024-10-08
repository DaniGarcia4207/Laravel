<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\ControladorCliente;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios',[ControladorUsuarios::class,'control']);
Route::get('/clientes',[ControladorCliente::class, 'lista']); 
Route::get('/clientes/{id}',[ControladorCliente::class, 'obtener']); 
Route::post('/clientes',[ControladorCliente::class, 'crear']); 
Route::put('/clientes/{id}',[ControladorCliente::class, 'actualizar']); 
Route::delete('/clientes/{id}',[ControladorCliente::class, 'eliminar']);
Route::patch('/clientes/{id}',[ControladorCliente::class, 'actualizar1']);
