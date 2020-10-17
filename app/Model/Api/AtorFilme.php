<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class AtorFilme extends Model
{
    protected $fillable = [
        'ator_id','filme_id',
    ];
    public $timestamps = false;
}
