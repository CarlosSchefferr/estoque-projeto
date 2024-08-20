<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Controllers\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'lista']);
Route::get('/produtos/{id}', [ProdutoController::class, 'mostra'])->name('produto.detalhes');