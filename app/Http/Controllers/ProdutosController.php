<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //

    public function index(Request $request){
        $data = Produto::all();

//dd($data);

        return view('home', compact('data'));

    }
    public function categoria(){
        echo "Categoria";
    }
}
