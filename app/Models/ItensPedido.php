<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Rmodel
{
    use HasFactory;
    protected $table = "itensPedidos";

    protected $fillable = 'itensPedidos';
}
