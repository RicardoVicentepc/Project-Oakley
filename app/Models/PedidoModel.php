<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    use HasFactory;
    protected $table = "tbPedido";
    protected $filable = ['idPedido', 'idProduto','idCliente']; // campos da table
    public $timestamps = false; 
}
