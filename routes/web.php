<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    TeamController,
    UserController,
    ViaCepController
};

//Team
Route::get('/teams/users/{id}', [TeamController::class, 'showUserToTeams'])->name('teams.user.show');
Route::get('/teams/{id}', [TeamController::class, 'showTeams'])->name('teams.show');

//POSTS
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}/posts', [PostController::class, 'show'])->name('posts.show');

//USUÁRIO
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');