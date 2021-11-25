<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Rmodel
{
    use HasFactory;
     protected $table = "categorias";
    protected $fillable = ["categorias"];
}
