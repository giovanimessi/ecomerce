<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Rmodel
{
    use HasFactory;

    protected $table = "pedidos";

    protected $fillable = "pedidos";
}
