<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Frase;
use PDF;

class UserController extends Controller
{
    public function showEmployees(){
        $user = User::all();
        return view('admin.posts.pdf', compact('user'));
    }

    public function showUnique($id)
    {
        //$user = User::where('id', $id)->first();
        if (!$user = User::find($id)){
            return redirect()->route('relatorio.geral');
        }

        $frase = Frase::where('user_id', $id)->first();

        //dd($frase);
        return view('admin.posts.relatorio', compact('user','frase'));
    }

}
