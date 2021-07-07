<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});

// Usuario
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/usuario/crear',[UsuarioController::class,'create'])->name('usuario.create');
Route::post('/usuario',[UsuarioController::class,'store'])->name('usuario.store');
Route::get('/usuario/{id}',[UsuarioController::class,'show'])->name('usuario.show');
Route::get('/usuario/editar/{id}',[UsuarioController::class,'edit'])->name('usuario.edit');
Route::put('/usuario/{id}',[UsuarioController::class,'update'])->name('usuario.update');
Route::delete('/usuario/{id}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
