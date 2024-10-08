<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;




Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produto.lista');
Route::get('/produtos/{id}', [ProdutoController::class, 'mostra'])->name('produto.detalhes');
Route::get('/produto/novo', [ProdutoController::class, 'novo'])->name('produto.formulario');
Route::match(array ('GET', 'POST'), '/produto/adiciona', [ProdutoController::class, 'adiciona'])->name('produto.adiciona');
Route::get('/produto/remove/{id}', [ProdutoController::class, 'remove'])->name('produto.remove');
Route::get('/produto/edita/{id}', [ProdutoController::class, 'edita'])->name('produto.edita');
Route::post('produto/atualiza/', [ProdutoController::class, 'atualiza'])->name('produto.atualiza');
Route::get("/register", [RegisterController::class, 'create'])->name('register');
Route::post("/register", [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LogoutController::class, '__invoke'])->name('logout');

Route::get('/home', function () {
    return view('home');
});