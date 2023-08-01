<?php

use App\Http\Controllers\MediosController;
use App\Http\Controllers\TendenciasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('solicitantes', 'admin.solicitantes')->name('solicitantes');

Route::view('servicios', 'servicios');
Route::view('productos', 'productos');
Route::view('soluciones', 'soluciones');
Route::get('tendencias', [TendenciasController::class, 'index']);
Route::view('exito','exito');
Route::get('medios', [MediosController::class, 'index']);
Route::get('medios/{id}',[MediosController::class, 'show']);
Route::view('cert','cert');
Route::view('talento', 'talento');
Route::get('tendencias/{id}',[TendenciasController::class, 'show']);
Route::view('contacto','contacto');
Route::view('metaverso','metaverso');

// servicios --------------------
Route::view('servicios/soc-noc','servicios/soc-noc');
Route::view('servicios/ciberinteligencia','servicios/ciberinteligencia');
Route::view('servicios/consultoria-estrategica ','servicios/consultoria-estrategica');
Route::view('servicios/otras-soluciones','servicios/otras-soluciones');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
