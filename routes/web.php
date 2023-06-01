<?php

use App\Http\Controllers\Alumnos;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Creditos;
use App\Http\Controllers\Notas;
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
//login
Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// agregar usuario
// Route::get('/usuarioNuevo', [AuthController::class, 'agregarNuevo']);

//pagina inicio
Route::get('/inicio', [Controller::class, 'index'])->name('inicio');

//agregar Usuarios
Route::get('/agregarUsuario', [AuthController::class, 'createUser']);
Route::post('/agregarNuevo', [AuthController::class, 'agregarNuevo']);

//datosAlumnos
Route::get('/vistaAlumnos', [Alumnos::class, 'index']);
Route::get('crearAlumnos', [Alumnos::class, 'create']);
Route::post('/store', [Alumnos::class, 'store']);
Route::get('/editarAlumnos/{id}', [Alumnos::class, 'edit'])->name('editarAlumnos');
Route::put('update/{id}', [Alumnos::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [Alumnos::class, 'destroy'])->name('destroy');

//creditos
Route::get('/vistaCreditos', [Creditos::class, 'indexCreditos']);
Route::get('crearCreditos', [Creditos::class, 'crearCreditos']);
Route::post('/storeCreditos', [Creditos::class, 'storeCreditos']);
Route::get('/editarCreditos/{id}', [Creditos::class, 'editCreditos'])->name('editarCreditos');
Route::put('updateCreditos/{id}', [Creditos::class, 'updateCreditos'])->name('updateCreditos');

Route::delete('/destroyCreditos/{id}', [Creditos::class, 'destroyCreditos'])->name('destroyCreditos');
Route::put('/cambiarEstado/{id}', [Creditos::class, 'cambiarEstado'])->name('cambiarEstado');
Route::get('crearCarpetas', [Creditos::class, 'createCarpetas']);
Route::post('/storeCarpetas', [Creditos::class, 'storeCarpetas']);

//notas
Route::get('vistaNotas', [Notas::class, 'indexNotas']);
Route::get('crearNotas', [Notas::class, 'createNotas']);
Route::post('/storeNotas', [Notas::class, 'storeNotas']);
Route::get('/editarNotas/{id}', [Notas::class, 'editNotas'])->name('editarNotas');
Route::put('updateNotas/{id}', [Notas::class, 'updateNotas'])->name('updateNotas');

Route::delete('/destroyNotas/{id}', [Notas::class, 'destroyNotas'])->name('destroyNotas');
Route::get('crearEventos', [Notas::class, 'createEventos']);
Route::post('/storeEventos', [Notas::class, 'storeEventos']);

Route::get('/verPDF/{id}',[Notas::class,'verPDF'])->name('verPDF');;


