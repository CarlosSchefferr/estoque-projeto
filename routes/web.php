<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Controllers\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produto.lista');
Route::get('/produtos/{id}', [ProdutoController::class, 'mostra'])->name('produto.detalhes');
Route::get('/produto/novo', [ProdutoController::class, 'novo'])->name('produto.formulario');
Route::match(array ('GET', 'POST'), '/produto/adiciona', [ProdutoController::class, 'adiciona'])->name('produto.adiciona');
Route::get('/produto/remove/{id}', [ProdutoController::class, 'remove'])->name('produto.remove');
Route::get('/produto/edita/{id}', [ProdutoController::class, 'edita'])->name('produto.edita');
Route::post('produto/atualiza/', [ProdutoController::class, 'atualiza'])->name('produto.atualiza');