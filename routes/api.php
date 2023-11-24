<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//ENDPOINTS PARA ENTIDADE DOCUMENTO//
Route::get('/documentos', [DocumentoController::class, 'index'])->name('Documentos.index');
Route::get('/documnentos/{id}/download', [DocumentoController::class, 'download'])->name('Documentos.download');
Route::post('/documentos', [DocumentoController::class, 'store'])->name('Documentos.store');
Route::put('/documentos/{id}', [DocumentoController::class, 'update'])->name('Documentos.update');
Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy'])->name('Documentos.destroy');

//ENDPOINTS PARA ENTIDADE ADMINISTRADOR//
Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index');
Route::post('/administradores', [AdministradorController::class, 'store'])->name('administradores.store');
Route::get('/administradores/{id}', [AdministradorController::class, 'show'])->name('administradores.show');
Route::put('/administradores/{id}', [AdministradorController::class, 'update'])->name('administradores.update');
Route::delete('/administradores/{id}', [AdministradorController::class, 'destroy'])->name('administradores.destroy');


