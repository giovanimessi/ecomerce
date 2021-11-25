<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //

    public function index(Request $request){

        return view('home');

    }
    public function categoria(){
        echo "Categoria";
    }
}
