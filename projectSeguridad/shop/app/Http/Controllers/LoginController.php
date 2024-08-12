<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    return view('auth.login');
    }

    Public function store (Request $request){
        $request -> validate([
            'email'=> 'email|required',
            'password' => 'required'
        ]);

        if(!auth()->attempt(['email'=>$request -> email, 'password'=> $request ->password])){
            return back()->with('mensaje', 'Credenciales INCONRECTAS !!!!');
        }
         return redirect()->route('main');
    }
}
