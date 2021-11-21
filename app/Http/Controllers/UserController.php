<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function showEmployees(){
        $user = User::all();
        return view('pdf', compact('user'));
    }

    public function showUnique($id){
       // $user = User::where('id', '=', auth()->id())->get();
       $comandoSql = "select * from user where id = ?";

            $valores = array($this ->id);
            $exec = $this->con->prepare($comandoSql);
            $exec -> execute();

           $value = $exec -> fetch();
           $log = new login();

           $log -> id   =  $value ["id"];
           $log -> nome     =  $value ["nome"];
           $log -> email  =  $value ["email"];

           return $log;
           
           dd(auth()->user()->name);
    
    }

    public function createPDF() {
    $data = User::all();
    view()->share('user',$data);
    $pdf = PDF::loadView('pdf', $data);

    return $pdf->download('pdf_file.pdf');
    }
}
