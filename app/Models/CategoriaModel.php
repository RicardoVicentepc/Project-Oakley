<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{ 
    use HasFactory;

    protected $table = "tbcategoria"; // Chamando a table
    protected $filable = ['idCategoria', 'categoria']; // campos da table
    public $timestamps = false;
}
