<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos.index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos.create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos.store');
});
//o fallback() faz com que quando a rota que é chamada não foi encontrada ou não existe, ele envia para o fallback(), que é uma tela totalmente customizavel.
Route::fallback(function(){
    return "ROTA NÃO ENCONTRADA!";
});