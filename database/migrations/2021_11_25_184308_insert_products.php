<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        $cat = new \App\Models\Categoria(['categorias' => 'Geral']);
        $cat->save(); 


        $prod = new \App\Models\Produto(['nome' => "Produto1",'valor'=> 10, 'foto'=> 'imagem/download.png', 'descricao'=> 'tetste sendo realizado', "categorias_id" => $cat->id]);
         $prod->save();
         
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
