<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ViaCepController
};



Route::get('/users', [UserController::class , 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class , 'show'])->name('users.show');

Route::get('/viacep',[ViaCepController::Class, 'index'])->name('viacep.index');
Route::post('/viacep',[ViaCepController::Class, 'index'])->name('viacep.index.post');
Route::get( '/viacep/{cep}', [ViaCepController::Class, 'show'])->name('viacep.show');

