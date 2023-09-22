<?php

use App\Http\Controllers\MediosController;
use App\Http\Controllers\TendenciasController;
use App\Http\Controllers\XmlController;
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

Route::view('servicios', 'servicios')->name('servicios');
Route::view('productos', 'productos')->name('productos');
Route::view('soluciones', 'soluciones')->name('soluciones');
Route::get('tendencias', [TendenciasController::class, 'index'])->name('tendencias');
Route::view('exito', 'exito')->name('exito');
Route::get('medios', [MediosController::class, 'index'])->name('medios');
Route::get('medios/{id}', [MediosController::class, 'show']);
Route::view('cert', 'cert')->name('cert');
Route::view('talento', 'talento')->name('talento');
Route::get('tendencias/{id}', [TendenciasController::class, 'show']);
Route::view('contacto', 'contacto')->name('contacto');
Route::view('metaverso', 'metaverso')->name('metaverso');
Route::view('terminos-privacidad', 'terminos-privacidad')->name('terminos-privacidad');
Route::get('sitemap', [XmlController::class, 'index']);

// servicios --------------------
Route::view('servicios/soc-noc', 'servicios/soc-noc')->name('servicios/soc-noc');
Route::view('servicios/ciberinteligencia', 'servicios/ciberinteligencia')->name('servicios/ciberinteligencia');
Route::view('servicios/consultoria-estrategica', 'servicios/consultoria-estrategica')->name('servicios/consultoria-estrategica');
Route::view('servicios/otras-soluciones', 'servicios/otras-soluciones')->name('servicios/otras-soluciones');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
