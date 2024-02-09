<?php

use App\Http\Controllers\AssinaturasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagemFundoController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/client')->group(function () {
    Route::get('/form', [AuthController::class, 'index'])->name('formL');
    Route::get('/register', [AuthController::class, 'register'])->name('formR');
    Route::get('/dashboard', [AuthController::class,'show'])->name('dashboard');
    Route::post('/register', [AuthController::class, 'store'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/assinatura', [AssinaturasController::class, 'index'])->name('assinatura');
    Route::get('/create-assinatura', [AssinaturasController::class, 'show'])->name('formA');
    Route::post('/create-assinatura', [AssinaturasController::class, 'store'])->name('createAssinatura');
    Route::get('/detail/{id}', [AssinaturasController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [AssinaturasController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AssinaturasController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [AssinaturasController::class, 'destroy'])->name('destroy');

    Route::get('/imagem', [ImagemFundoController::class,'index'])->name('imagem');
    Route::get('/create-imagem', [ImagemFundoController::class, 'show'])->name('formI');
    Route::post('/create-imagem', [ImagemFundoController::class, 'store'])->name('createImagem');
    // Route::get('/detail', [ImagemFundoController::class, 'detail'])->name('detail');
});
