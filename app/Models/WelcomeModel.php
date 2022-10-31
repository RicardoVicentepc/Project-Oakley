<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeModel extends Model
{
    use HasFactory;

    protected $table = "tbCategoria";
    protected $filable = ['idCategoria','categoria']; // campos da table
    public $timestamps = false; 
}
