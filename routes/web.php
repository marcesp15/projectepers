<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutosController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('contenido', [HomeController::class, 'contenido'])->name('management');

Route::get('contenido/institutos', [InstitutosController::class, 'index'])->name('institutos.index');

Route::get('contenido/institutos/create', [InstitutosController::class, 'crear'])->name('institutos.create');

Route::post('contenido/institutos', [InstitutosController::class, 'store'])->name('institutos.store');

Route::get('contenido/institutos/{instituto}', [InstitutosController::class, 'show'])->name('institutos.show');

Route::get('contenido/institutos/{instituto}/edit', [InstitutosController::class, 'editar'])->name('institutos.edit');

Route::put('contenido/institutos/{instituto}', [InstitutosController::class, 'actualizar'])->name('institutos.update');

Route::delete('contenido/institutos/{instituto}', [InstitutosController::class, 'destroy'])->name('institutos.destroy');




/* Route::delete('contenido/institutos/{instituto}', [InstitutosController::class, 'destroy'])->name('institutos.destroy'); */