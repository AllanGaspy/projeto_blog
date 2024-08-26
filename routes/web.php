<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Funcionario
Route::get('/funcionario', [FuncionarioController::class, 'index']);


//Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
