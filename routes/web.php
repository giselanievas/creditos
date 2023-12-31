<?php

use Illuminate\Support\Facades\Route;
use \APP\InicioController;
use \APP\CreditoContoller;
use \APP\LineaCreditoController;
use \APP\VerazAPiController;

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

//Rutas a las que se permitirá acceso
Route::group(['middleware' => ['cors']], function () {

        ////////////////////////////////////////////  Tipo  de linea de creditos /////////////////////////////////////////////////////////////////

        Route::get('/tipodelinea', [App\Http\Controllers\CreditoController::class, 'index'])->name('tipoLineaCredito');
        Route::post('/tipodelinea', [App\Http\Controllers\CreditoController::class, 'agregar'])->name('agregarTipoLinea');
        Route::get('/tipodelinea/editar/{id}', [App\Http\Controllers\CreditoController::class, 'editar'])->name('editarTipoDeLinea');
        Route::put('/tipodelinea/editar/{id}', [App\Http\Controllers\CreditoController::class, 'update'])->name('updateTipoDeLinea');
        Route::get('/tipodelinea/habilitar/{id}', [App\Http\Controllers\CreditoController::class, 'habilitar'])->name('habilitarTipoLinea');
        Route::get('/tipodelinea/eliminar/{id}', [App\Http\Controllers\CreditoController::class, 'eliminar'])->name('eliminaTipoDeLinear');


        ////////////////////////////////////////////  Linea de creditos /////////////////////////////////////////////////////////////////
        Route::get('/iniciocreditos', [App\Http\Controllers\LineaCreditoController::class, 'inicio'])->middleware('can:lineaCredito')->name('inicioCreditos');
        Route::get('/lineacredito', [App\Http\Controllers\LineaCreditoController::class, 'index'])->middleware('can:lineaCredito')->name('lineaCredito');
        Route::get('/lineacredito/agregar', [App\Http\Controllers\LineaCreditoController::class, 'agregar'])->name('agregarLineaCredito');
        Route::post('/lineacredito/agregar', [App\Http\Controllers\LineaCreditoController::class, 'guardar'])->name('guardarLineaCredito');
        Route::get('/lineacredito/editar/{id}', [App\Http\Controllers\LineaCreditoController::class, 'editar'])->name('editarLinea');
        Route::put('/lineacredito/editar/{id}', [App\Http\Controllers\LineaCreditoController::class, 'update'])->name('updateLinea');
        //**********************************Grilla de creditos***********************************************************////
        Route::get('/lineacredito/agregargrilla', [App\Http\Controllers\ImagenesController::class, 'index'])->name('grillaDeCredito');
        Route::post('/lineacredito/guardargrilla', [App\Http\Controllers\ImagenesController::class, 'create'])->name('guardarGrillaDeCredito');
        Route::get('/lineacredito/vergrilla', [App\Http\Controllers\ImagenesController::class, 'show'])->name('verGrillaDeCredito');
        Route::get('/lineacredito/vergrillaborrar/{id}', [App\Http\Controllers\ImagenesController::class, 'destroy'])->name('grillaDeCreditoDelete');

        ////////////////////////Grillas Publicas//////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('/vergrillas', [App\Http\Controllers\GrillasController::class, 'index'])->name('visualizarGrillas');




        //////////////////////////////////////////// Detalle Linea de creditos /////////////////////////////////////////////////////////////////
        Route::get('/detalleLinea', [App\Http\Controllers\DetalleCreditoController::class, 'index'])->middleware('can:detalleLineaCredito')->name('detalleLineaCredito');
        Route::get('/detalleLinea/agregar', [App\Http\Controllers\DetalleCreditoController::class, 'agregar'])->name('agregarDetalleLinea');
        Route::post('/detalleLinea/agregar', [App\Http\Controllers\DetalleCreditoController::class, 'guardar'])->name('guardarDetalleLinea');
        Route::get('/detalleLinea/editar/{id}', [App\Http\Controllers\DetalleCreditoController::class, 'editar'])->name('editarDetalleDeLinea');
        Route::put('/detalleLinea/editar/{id}', [App\Http\Controllers\DetalleCreditoController::class, 'update'])->name('updateDetalleDeLinea');
        Route::get('/detalleLinea/habilitar/{id}', [App\Http\Controllers\DetalleCreditoController::class, 'habilitar'])->name('habilitarDetalleLinea');
        Route::get('/detalleLinea/eliminar/{id}', [App\Http\Controllers\DetalleCreditoController::class, 'eliminar'])->name('bajaDetalleDeLinear');

        ////////////////////////////////////////// cotizado con VUE ///////////////////////////////////////////////////////////////////////////////
        Route::get('/cotizador', [App\Http\Controllers\CotizadorController::class, 'index']);
        Route::post('/cotizador/{id}/{modelo}/{cuotas}', [App\Http\Controllers\CotizadorController::class, 'calculos']);

        /////////////////////////////////////////formulario////////////////////////////////////////////////////////////////////////////////////////

        Route::post('/formulario', [App\Http\Controllers\FormularioController::class, 'store'])->name('formulario');

        //////////////////////////////////////////////Ingreso Logueado///////////////////////////////////////////////////////////////////////////////

        Route::get('/ingreso', [App\Http\Controllers\IngresoController::class, 'index'])->name('ingreso');

        /////////////////////////////////////////Consulta APi Veraz ////////////////////////////////////////////////////////////////////////////////////////

        Route::get('/consultaVeraz', [App\Http\Controllers\VerazAPiController::class, 'index'])->name('consumirApi');

        //////////////////////////////////////Solicitud de Credito/////////////////////////////////////////////////////////////

        Route::post('/solicitud/{cuil}', [App\Http\Controllers\SolicitudCreditoController::class, 'store'])->name('solicitudCredito');



        
});     

