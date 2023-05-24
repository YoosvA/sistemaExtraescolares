<?php

use App\Http\Controllers\Alumnos;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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