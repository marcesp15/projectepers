<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutosController;
use App\Http\Controllers\PropuestasController;
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

/* Route::resource('/', HomeController::class); */

Route::get('/', [HomeController::class, 'home']);

Route::get('contenido', [HomeController::class, 'contenido'])->name('management');

Route::get('contenido/institutos', [InstitutosController::class, 'index'])->name('institutos.index');

Route::get('contenido/institutos/create', [InstitutosController::class, 'create'])->name('institutos.create');

Route::post('contenido/institutos', [InstitutosController::class, 'store'])->name('institutos.store');

Route::get('contenido/institutos/{instituto}', [InstitutosController::class, 'show'])->name('institutos.show');

Route::get('contenido/institutos/{instituto}/edit', [InstitutosController::class, 'edit'])->name('institutos.edit');

Route::put('contenido/institutos/{instituto}', [InstitutosController::class, 'update'])->name('institutos.update');

Route::delete('contenido/institutos/{instituto}', [InstitutosController::class, 'destroy'])->name('institutos.destroy');

/* Route::resource('contenido/institutos', InstitutosController::class); */


Route::get('contenido/propuestas', [PropuestasController::class, 'index'])->name('propuestas.index');

Route::get('contenido/propuestas/create', [PropuestasController::class, 'create'])->name('propuestas.create');

Route::post('contenido/propuestas', [PropuestasController::class, 'store'])->name('propuestas.store');

Route::get('contenido/propuestas/{id}', [PropuestasController::class, 'show'])->name('propuestas.show');

Route::get('contenido/propuestas/{propuesta}/edit', [PropuestasController::class, 'edit'])->name('propuestas.edit');

Route::put('contenido/propuestas/{propuesta}', [PropuestasController::class, 'update'])->name('propuestas.update');

Route::delete('contenido/propuestas/{propuesta}', [PropuestasController::class, 'destroy'])->name('propuestas.destroy');

















/* Route::delete('contenido/institutos/{instituto}', [InstitutosController::class, 'destroy'])->name('institutos.destroy'); */