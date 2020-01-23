<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Cores extends Model
{
    protected $primarykey = 'idcor';
    protected $fillable = [
        'idcor',
        'nomecor'
    ];
    public $timestamps = false;
}
