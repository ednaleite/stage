<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $primarykey = 'idproduto';
    protected $fillable = [
        'idproduto',
        'nomeproduto',
        'descproduto',
        'estqminproduto',
        'valtacproduto',
        'valvareproduto',
        'descontoproduto',
        'ncmcodproduto',
        'ncmdescproduto',
        'unimedproduto'
    ];
    public $timestamps = false;
}
