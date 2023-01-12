<?php

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

use App\Http\Controllers\ArticuloController;

Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::get('/articulos/{id}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::post('articulos/', [ArticuloController::class, 'store'])->name('articulos.store');
Route::post('articulos/', [ArticuloController::class, 'destroy'])->name('articulos.destroy');