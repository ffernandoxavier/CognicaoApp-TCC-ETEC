<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class Teste1Controller extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('layouts.teste2');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
           /* 'name' => ['required', 'string', 'max:255'],
            /*'cpf' => ['required', 'string', 'max:255'],
            'sexo' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], */
        ]);

        $user = User::create([
            'f_dia' => $request->dia,
            'f_mes'=>$request->mes,
            'f_ano'=>$request->ano,
        
        ]);

        event(new Registered($user));

        Auth::teste12($user);

        return redirect('teste2');
    }
}
