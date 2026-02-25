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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\contato::class, 'contato']);
Route::get('/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
Route::get('/cancelar-matricula', [App\Http\Controllers\Aluno::class, 'cancelar']);
Route::get('/notas', [App\Http\Controllers\pai::class, 'notas']);
Route::get('/chamada', [App\Http\Controllers\professor::class, 'chamada']);

Route::get('/aluno/login', [App\Http\Controllers\contato::class, 'contato']);

Route::get('/professor/login', [App\Http\Controllers\contato::class, 'contato']);






