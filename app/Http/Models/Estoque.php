<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $primarykey = 'idestoque';
    protected $fillable = [
        'idestoque',
        'local',
        'sku',
        'ref',
        'img',
        'wms',
        'ref',
        'produto_idproduto',
        'cor_idcor',
        'tamanho_idtamanho'
    ];
    public $timestamps = false;
}
