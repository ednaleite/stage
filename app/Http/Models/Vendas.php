<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $primarykey = 'idvenda';
    protected $fillable = [
        'idvenda',
        'caixavenda',
        'datavenda',
    ];
    public $timestamps = false;
}
