<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $fillable = [
        'name_ator','data_nascimento','sexo','email',
    ];
}
