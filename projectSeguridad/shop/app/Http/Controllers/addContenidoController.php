<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class addContenidoController extends Controller
{
    public function index(){
        return view('addContenido');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'nombre' =>'required|min:5|max:15',
            'descripcion'=> 'required|min:3|max:10',
            'precio'=> 'required|min:3|max:10'
        ]);

        Product::create([
            'nombre' => $request -> nombre,
            'descripcion'=> $request -> descripcion,
            'precio'=> $request -> precio
        ]);

    }
}
