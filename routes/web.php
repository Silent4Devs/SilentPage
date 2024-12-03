<?php

use App\Http\Controllers\MediosController;
use App\Http\Controllers\TendenciasController;
use App\Http\Controllers\XmlController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::view(LaravelLocalization::transRoute('routes.solicitantes'), 'admin.solicitantes')->name('solicitantes');
        Route::view(LaravelLocalization::transRoute('routes.servicios'), 'servicios')->name('servicios');
        Route::view(LaravelLocalization::transRoute('routes.productos'), 'productos')->name('productos');
        Route::view(LaravelLocalization::transRoute('routes.soluciones'), 'soluciones')->name('soluciones');
        Route::get(LaravelLocalization::transRoute('routes.tendencias'), [TendenciasController::class, 'index'])->name('tendencias');
        Route::view(LaravelLocalization::transRoute('routes.exito'), 'exito')->name('exito');
        Route::get(LaravelLocalization::transRoute('routes.medios'), [MediosController::class, 'index'])->name('medios');
        Route::get(LaravelLocalization::transRoute('routes.medios').'/{id}', [MediosController::class, 'show']);
        Route::view(LaravelLocalization::transRoute('routes.contacto'), 'contacto')->name('contacto');
        Route::view(LaravelLocalization::transRoute('routes.metaverso'), 'metaverso')->name('metaverso');
        Route::view(LaravelLocalization::transRoute('routes.terminos_privacidad'), 'terminos-privacidad')->name('terminos-privacidad');
        Route::view(LaravelLocalization::transRoute('routes.cert'), 'cert')->name('cert');
    }
);

Route::view('talento', 'talento')->name('talento');
Route::get('tendencias/{id}', [TendenciasController::class, 'show']);
Route::get('sitemap', [XmlController::class, 'index']);
Route::get('atlassian-domain-verification-05cjccb2-j17a-1875-71kc-21725a698cc3.html', function () {
    return response()->file(public_path('atlassian-domain-verification-05cjccb2-j17a-1875-71kc-21725a698cc3.html'));
});

// servicios --------------------
Route::view('servicios/soc-noc', 'servicios/soc-noc')->name('servicios/soc-noc');
Route::view('servicios/ciberinteligencia', 'servicios/ciberinteligencia')->name('servicios/ciberinteligencia');
Route::view('servicios/consultoria-estrategica', 'servicios/consultoria-estrategica')->name('servicios/consultoria-estrategica');
Route::view('servicios/otras-soluciones', 'servicios/otras-soluciones')->name('servicios/otras-soluciones');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
