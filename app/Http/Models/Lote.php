<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $primarykey = 'idlote';
    protected $fillable = [
        'idlote',
        'numerolote',
        'idestoque',
        'quantidadelote',
        'destinolote'
    ];
    public $timestamps = false;
}
