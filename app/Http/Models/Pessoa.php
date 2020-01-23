<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $primarykey = 'idpessoa';
    protected $fillable = [
        'idpessoa',
        'nomepessoa',
        'cpfcnpjpessoa',
        'ceppessoa',
        'emailpessoa',
        'enderecopessoa',
        'fonepessoa',
        'fone2pessoa',
        'fone3pessoa',
        'fone4pessoa',
        'clientepessoa',
        'fornecedorpessoa',
        'obspessoa',
        'senhapessoa'
    ];
    public $timestamps = false;
}
        