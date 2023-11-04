<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;

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

Route::get('/directorio', [directorioController::class,'index'])->name('directorio.inicio');

Route::get('/directorio/crearEntrada', [directorioController::class, 'crear'])->name('directorio.crearEntrada');

Route::get('/directorio/ver/buscar', [directorioController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorio/ver/{codigoEntrada}', [directorioController::class, 'ver'])->name('directorio.ver');

Route::get('/directorio/eliminar/{codigoEntrada}', [directorioController::class, 'delete'])->name('directorio.eliminar');

Route::post('/directorio/store', [directorioController::class, 'store'])->name('directorio.store');

Route::get('/directorio/buscar/buscarContacto', [directorioController::class,'buscarContacto'])->name('directorio.buscarContacto');

Route::get('/directorio/buscar/buscarContacto/agregarContacto', [directorioController::class, 'agragarContacto'])->name('directorio.agregarContacto');

Route::post('/directorio/contacto/store', [contactoController::class, 'contactoStore'])->name('contacto.store');

