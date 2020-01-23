<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $primarykey = 'idunidade';
    protected $fillable = [
        'idunidade',
        'cpfcnpjunidade',
        'nomeunidade',
    ];
    public $timestamps = false;
}
