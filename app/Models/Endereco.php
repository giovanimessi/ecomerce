<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Rmodel
{
    use HasFactory;
    protected $table = "categorias";

    protected $fillable =["enderecos"];

}
