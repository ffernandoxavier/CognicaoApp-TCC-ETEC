<?php

use App\Http\Controllers\Teste1Controller;
use App\Models\Tempo;
use App\Models\Semana;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Frase;
use App\Models\Objeto;
use App\Models\Cor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Teste
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

Route::post('/teste2', function (Request $request) {


    // PRA DEBUGAR O REQUEST:

    //o dump exibe na tela... e continua a execu????o
    //dump($request->all());

    // dd exibe na tela e para a execu????o
    //dd(auth()->user()->name);
   
    // Tempo::create([
    //     'dia' => $request->f_dia,
    //     'mes'=> $request->f_mes,
    //     'ano'=>$request->f_ano,
    //     'user_id'=>auth()->id()
    // ]);

    // preciso commitar

    //Dessa maneira, nao precisa colocar o user_id no fillable, pq ?? o proprio laravel que esta adicionando o user_id
    auth()->user()->tempo()->create([
        'dia' => $request->f_dia,
        'mes'=> $request->f_mes,
        'ano'=>$request->f_ano
    ]);

    return view('/teste2');
})->middleware(['auth']);

Route::post('/teste3', function (Request $request) {
    auth()->user()->semana()->create([
        'dia' => $request->semana
    ]);

    return view('/teste3');
})->middleware(['auth']);

Route::post('/teste6', function (Request $request) {
    auth()->user()->frase()->create([
        'frase' => $request->resposta5
    ]);

    return view('/teste6');
})->middleware(['auth']);

Route::post('/teste7', function (Request $request) {
    auth()->user()->objeto()->create([
        'res1' => $request->resposta61,
        'res2'=> $request->resposta62,
        'res3'=> $request->resposta63,
        'res4'=> $request->resposta64,
        'res5'=> $request->resposta65,
        'res6'=> $request->resposta66
    ]);

    return view('/teste7');
})->middleware(['auth']);

Route::post('/agradecimentos', function (Request $request) {
    auth()->user()->cor()->create([
        'cor1' => $request->resposta71,
        'cor2' => $request->resposta81,
        'cor3' => $request->resposta91
    ]);

    return view('/agradecimentos');
});

require __DIR__.'/auth.php';


