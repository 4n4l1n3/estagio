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
Route::get('/documentos', [DocumentoController::class, 'index']);
Route::get('/documnentos/{id}/download', [DocumentoController::class, 'download']);
Route::post('/documentos', [DocumentoController::class, 'store']);
Route::put('/documentos/{id}', [DocumentoController::class, 'update']);
Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy']);

//ENDPOINTS PARA ENTIDADE ADMINISTRADOR//
Route::get('/administradores', [AdministradorController::class, 'index']);
Route::post('/administradores', [AdministradorController::class, 'store']);
Route::get('/administradores/{id}', [AdministradorController::class, 'show']);
Route::put('/administradores/{id}', [AdministradorController::class, 'update']);
Route::delete('/administradores/{id}', [AdministradorController::class, 'destroy']);


