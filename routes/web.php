<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

// Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
// Route::get('/contato', [App\Http\Controllers\contato::class, 'contato']);
// Route::get('/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
// Route::get('/cancelar-matricula', [App\Http\Controllers\Aluno::class, 'cancelar']);
// Route::get('/notas', [App\Http\Controllers\pai::class, 'notas']);
// Route::get('/chamada', [App\Http\Controllers\professor::class, 'chamada']);

// Route::get('/aluno/login', [App\Http\Controllers\contato::class, 'contato']);

// Route::get('/professor/login', [App\Http\Controllers\contato::class, 'contato']);



route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
    Route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover'])->name('aluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::get('/consultar', [App\Http\Controllers\AlunoController::class, 'consultar'])->name('aluno.consultar');;
   

});


