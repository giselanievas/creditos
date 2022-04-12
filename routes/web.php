<?php

use Illuminate\Support\Facades\Route;
use \APP\InicioController;
use \APP\CreditoContoller;

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
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/registrado', [App\Http\Controllers\InicioController::class, 'registrado'])->name('registrado')->middleware('auth');
Route::get('/validar/{id}', [App\Http\Controllers\InicioController::class, 'validar'])->name('validarEmail');
Route::get('/validado', [App\Http\Controllers\InicioController::class, 'validado'])->name('validado');

//////////////////////////////////////////// linea de creditos /////////////////////////////////////////////////////////////////

Route::get('/tipodelinea', [App\Http\Controllers\CreditoController::class, 'index'])->name('tipoLineaCredito');
Route::post('/tipodelinea', [App\Http\Controllers\CreditoController::class, 'agregar'])->name('agregarTipoLinea');
Route::get('/tipodelinea/editar/{id}', [App\Http\Controllers\CreditoController::class, 'editar'])->name('editarTipoDeLinea');
Route::put('/tipodelinea/editar/{id}', [App\Http\Controllers\CreditoController::class, 'update'])->name('updateTipoDeLinea');
Route::get('/tipodelinea/eliminar/{id}', [App\Http\Controllers\CreditoController::class, 'eliminar'])->name('eliminaTipoDeLinear');
