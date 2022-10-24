<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;
    protected $table = "tbcliente"; 
    protected $filable =
    [
        'idCliente', 'nomeCliente', 'dtNascCliente',
        'estadoCivilCliente', 'enderecoCliente', 'numeroCliente', 
        'cepCliente','cidadeCliente', 'estadoCliente',
        'rgCliente','cpfCliente', 'emailCliente',
        'foneCliente','celularCliente'
    ];
    public $timestamps = false;
}
