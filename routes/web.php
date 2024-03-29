<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViaCepController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('home');
});

//Team
Route::get('/teams/users/{id}', [TeamController::class, 'showUserToTeams'])->name('teams.user.show');
Route::get('/teams/{id}', [TeamController::class, 'showTeams'])->name('teams.show');


Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');


Route::middleware(['auth'])->group(function () {
    //POSTS
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}/posts', [PostController::class, 'show'])->name('posts.show');

    //USUÁRIO
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'admin'])->name('admin');
});

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');


Route::get('/api', [ApiController::class, 'index'])->name('api.index');
Route::post('/api', [ApiController::class, 'show']);