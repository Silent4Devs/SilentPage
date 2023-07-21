<?php

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
Route::view('medios','medios');
Route::view('cert','cert');
Route::view('talento', 'talento');
Route::get('tendencias/{id}',[TendenciasController::class, 'show']);
Route::view('contacto','contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
