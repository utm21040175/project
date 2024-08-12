<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' =>'required|min:5|max:15',
            'username'=> 'required|unique:users|min:5|max:10',
            'email'=> 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request -> name,
            'username'=> $request -> username,
            'email'=> $request -> email,
            'password'=> Hash::make($request->password)
        ]);

        Auth::attempt([
            'email'=>$request -> email,
            'password'=> $request ->password
        ]);
        return redirect()->route('main');

    }


}
