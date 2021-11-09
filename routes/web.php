<?php

use App\Http\Controllers\Teste1Controller;
use App\Models\Teste1;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/teste4', function () {
    return view('teste4');
})->middleware(['auth'])->name('teste4');

Route::get('/teste5', function () {
    return view('teste5');
})->middleware(['auth'])->name('teste5');

Route::get('/teste6', function () {
    return view('teste6');
})->middleware(['auth'])->name('teste6');

Route::get('/teste7', function () {
    return view('teste7');
})->middleware(['auth'])->name('teste7');

Route::get('/agradecimentos', function () {
    return view('agradecimentos');
})->middleware(['auth'])->name('agradecimentos');

Route::post('/sal-teste1', function (Request $request) {
    dd($request->all());
});
require __DIR__.'/auth.php';


