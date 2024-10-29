<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato'); 
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato'); 
Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedor',[FornecedorController::class, 'fornecedor'])->name('app.fornecedor');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste'])->name('site.rota1');

Route::fallback(function() {
    echo 'Rota inexistente. <a href="'.route('site.index').'">Clique Aqui!</a>';
});