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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])-> name('pagina-principal');
Route::get('/Sobre', [App\Http\Controllers\sobre::class, 'index'])-> name('pagina-sobre');
Route::get('/Contato', [App\Http\Controllers\Contato::class, 'index'])-> name('pagina-contato');
Route::get('/desenvolvimento', [App\Http\Controllers\Desenvolvimento::class, 'index'])-> name('pagina-desenvolvimento');










