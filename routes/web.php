<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('controlEscolar', 'ControlEscolarController')->middleware('auth');
Route::resource('baseDeDatos', 'BaseDeDatosController')->middleware('auth');
Route::resource('calificaciones', 'CalificacionesController')->middleware('auth');
Route::resource('colegiaturas', 'ColegiaturasController')->middleware('auth');
Route::resource('certificaciones', 'CertificacionesController')->middleware('auth');
Route::resource('bajas', 'BajasController')->middleware('auth');
Route::resource('clientePrueba', 'ClientePruebaController')->middleware('auth');
Route::get('getPdf/{id}/{status}', 'CalificacionesController@getPdf');

