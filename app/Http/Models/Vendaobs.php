<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendaobs extends Model
{
    protected $primarykey = 'idvenda';
    protected $fillable = [
        'idvenda',
        'idprodutovenda',
        'quantidadevenda',
    ];
    protected $timestamps = false;
}
