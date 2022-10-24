<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel​ extends Model
{
    use HasFactory;

    protected $table = "tbProduto";
    protected $filable = ['idProduto','idCategoria', 'produto', 'valor']; // campos da table
    public $timestamps = false; 
}
