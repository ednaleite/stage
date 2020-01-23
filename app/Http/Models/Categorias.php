<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $primarykey = 'idcategoria';
    protected $fillable = [
        'idcategoria',
        'nomecategoria'
    ];
    protected $timestamps = false;
}
