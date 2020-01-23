<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $primarykey = 'idmovimentacao';
    protected $fillable = [
        'idmovimentacao',
        'idestoque',
        'datamovimentacao',
        'usuariomovimentacao',
        'lotemovimentacao',
        'obsmovimentacao'
    ];
    public $timestamps = false;
}
