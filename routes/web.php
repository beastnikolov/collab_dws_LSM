<?php

use App\Http\Controllers\AfiliadosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [InicioController::class,'inicio'])->name('inicio');
Route::get('directorio', [DirectorioController::class,'directorio'])->name('directorio');
Route::get('afiliados', [AfiliadosController::class,'afiliados'])->name('afiliados');
Route::get('contacto', [ContactoController::class,'contacto'])->name('contacto');