<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;

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

/*Route::get('/inicio', [productosController::class, 'index'])->name('inicio');
Route::get('/crear', [productosController::class, 'create'])->name('crear');
Route::get('/actualizar', [productosController::class, 'update'])->name('actualizar');
Route::get('/borrar', [productosController::class, 'destroy'])->name('borrar');
Route::get('/insertar', [productosController::class, 'store'])->name('insertar');*/

Route::resource('/productos',productosController::class);
