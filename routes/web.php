<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instituicao', function () {
    return view('instituicao');
});

Route::get('/acesso', function () {
    return view('acesso');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});


