<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;
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
/**
 * Basic API routes
 * Route::get($uri, $callback);
 * Route::post($uri, $callback);
 * Route::put($uri, $callback);
 * Route::delete($uri, $callback);
 */
Route::get('tarefas', [TarefasController::class, 'index']);
Route::get('tarefas/{tarefa}', [TarefasController::class, 'show']);
Route::post('tarefas', [TarefasController::class,'store']);
Route::put('tarefas/{tarefa}', [TarefasController::class,'update']);
Route::delete('tarefas/{tarefa}', [TarefasController::class,'delete']);
