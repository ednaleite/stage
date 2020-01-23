<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $primarykey = 'idtamanho';
    protected $fillable = [
        'idtamanho',
        'nometamanho'
    ];
    public $timestamps = false;
}
