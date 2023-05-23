<?php

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
Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('logear', [AuthController::class,'logear'])->name('logear');
Route::get('/usuarioNuevo', [AuthController::class, 'agregarNuevo']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/agregarUsuario', [AuthController::class, 'createUser']);
Route::post('/agregarNuevo', [AuthController::class, 'agregarNuevo']);

Route::get('/inicio', [Controller::class, 'index'])->name('inicio');
Route::get('datostitulo1',[Controller::class, 'datostitulo1'])->name('datostitulo1');