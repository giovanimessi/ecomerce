<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Rmodel
{
    use HasFactory;
 
    protected $fillable = ["nome",'foto','descricao','categorias_id','valor'];

    protected $table = "produtos";

}
