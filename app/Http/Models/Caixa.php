<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $primarykey = 'idcaixa';
    protected $fillable = [
        'idcaixa',
        'estadocaixa'
    ];
    protected $timestamps = false;
}
