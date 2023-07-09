<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

  
    protected $table = "pedidos";
    protected $primaryKey = "numero_pedido";
    protected $fillable = ["clienteID","name","lastname","phone","email"];
}
