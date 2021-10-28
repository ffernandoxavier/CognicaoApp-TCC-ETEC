<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('instituicao', function () {
    return view('instituicao');
});

Route::get('register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/completecadastro', function () {
    return view('completecadastro');
})->middleware(['auth'])->name('completecadastro');

Route::get('/abertura', function () {
    return view('abertura');
})->middleware(['auth'])->name('abertura');

Route::get('/teste1', function () {
    return view('teste1');
})->middleware(['auth'])->name('teste1');

Route::get('/teste2', function () {
    return view('teste2');
})->middleware(['auth'])->name('teste2');

Route::get('/teste3', function () {
    return view('teste3');
})->middleware(['auth'])->name('teste3');

require __DIR__.'/auth.php';


