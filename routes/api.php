<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Obtener las polizas
Route::get('polizas', 'PolizaController@getPolizas');

//Obtener una poliza en especifico
Route::get('poliza/{id_poliza}', 'PolizaController@getPolizaById');

//Crear una poliza
Route::post('agregarPoliza', 'PolizaController@agregarPoliza');

//Actualizar una poliza
Route::put('actualizarPoliza/{id_poliza}', 'PolizaController@actualizarPoliza');

//Eliminar una poliza
Route::delete('eliminarPoliza/{id_poliza}', 'PolizaController@eliminarPoliza');

//Obtener clientes
Route::get('clientes', 'ClienteController@getClientes');

//Crear un cliente
Route::post('agregarCliente', 'PolizaController@agregarPoliza');