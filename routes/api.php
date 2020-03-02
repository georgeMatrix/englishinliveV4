<?php

use Illuminate\Http\Request;

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

Route::get('darDeBaja/{id}', 'BajasController@darDeBaja');
Route::get('darDeBaja', 'BajasController@darDeBajaCount');
Route::get('getClientes', 'ClientePruebaController@getClientes');
Route::get('getBaseDeDatos', 'BaseDeDatosController@getBaseDeDatos');
Route::get('eliminarBaseDeDatos/{id}', 'BaseDeDatosController@eliminar');
Route::get('getControlEscolar', 'ControlEscolarController@getControlEscolar');
Route::get('eliminarControlEscolar/{id}', 'ControlEscolarController@eliminar');
Route::get('getCalificaciones', 'CalificacionesController@getCalificaciones');
Route::get('eliminarCalificaciones/{id}', 'CalificacionesController@eliminar');
Route::get('getColegiaturas', 'ColegiaturasController@getColegiaturas');
Route::get('eliminarColegiaturas/{id}', 'ColegiaturasController@eliminar');
Route::get('getBajas', 'BajasController@getBajas');
Route::get('getCertificaciones', 'CertificacionesController@getCertificaciones');
Route::get('eliminarCertificaciones/{id}', 'CertificacionesController@eliminar');
